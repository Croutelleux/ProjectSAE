<!DOCTYPE html>
<html lang="fr">
<?php
include_once 'include/config.php'
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />


    <title>Mon Panier</title>
    <link rel="stylesheet" href="css/style.css">
</head>


<body>
    <?php
    include './modules/header.php'

    ?>
    <main class="gestion_panier">
        <div class="box_article">
            <h1>Nom de l'Article</h1>
            <div class="article">
                <img src="/img/img-2<?= fctImage(); ?>" alt="Image d'un pont" id="img-1">
                <div class="info_art">
                    <h3>Prix</h3>
                    <div class="article_add">
                        <button type="submit" class="btajouter_panier">Ajouter au Panier</button>
                    </div>
                </div>
            </div>
            <div class="caracteristique">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quas nihil assumenda praesentium dolor voluptates nobis alias, magnam aliquam harum, atque excepturi laudantium officiis, quod ea nemo in culpa error?
                    Obcaecati totam labore nulla eos eaque optio consequuntur consectetur, debitis tempore. Necessitatibus ipsum commodi cumque rem natus? Nostrum facilis eligendi impedit pariatur sit eum iure sed? Libero qui molestias nam.
                    Molestiae qui mollitia doloribus dolor! Suscipit enim vel officia perferendis voluptatum doloribus odit, dolores unde veniam consequatur pariatur harum quisquam, omnis eos repellat aperiam, at ratione quis corrupti aut! Dolores?</p>
            </div>
            <div>
            <script type="module">
      import { WebXRButton } from "./js/util/webxr-button.js";
      import { Scene } from "./js/render/scenes/scene.js";
      import {
        Renderer,
        createWebGLContext,
      } from "./js/render/core/renderer.js";
      import { Node } from "./js/render/core/node.js";
      import { Gltf2Node } from "./js/render/nodes/gltf2.js";
      import { DropShadowNode } from "./js/render/nodes/drop-shadow.js";
      import { vec3 } from "./js/render/math/gl-matrix.js";
      import { Ray } from "./js/render/math/ray.js";

      // XR globals.
      let xrButton = null;
      let xrRefSpace = null;
      let xrViewerSpace = null;
      let xrHitTestSource = null;

      // WebGL scene globals.
      let gl = null;
      let renderer = null;
      let scene = new Scene();
      scene.enableStats(false);

      let arObject = new Node();
      arObject.visible = false;
      scene.addNode(arObject);

      let flower = new Gltf2Node({url: "model/viking_room.gltf",});
      arObject.addNode(flower);

      let reticle = new Gltf2Node({ url: "media/gltf/reticle/reticle.gltf" });
      reticle.visible = false;
      scene.addNode(reticle);

      // Having a really simple drop shadow underneath an object helps ground
      // it in the world without adding much complexity.
      let shadow = new DropShadowNode();
      vec3.set(shadow.scale, 0.15, 0.15, 0.15);
      arObject.addNode(shadow);

      const MAX_FLOWERS = 1;
      let flowers = [];

      // Ensure the background is transparent for AR.
      scene.clear = false;

      function initXR() {
        xrButton = new WebXRButton({
          onRequestSession: onRequestSession,
          onEndSession: onEndSession,
          textEnterXRTitle: "START AR",
          textXRNotFoundTitle: "AR NOT FOUND",
          textExitXRTitle: "EXIT  AR",
        });
        document.querySelector("header").appendChild(xrButton.domElement);

        if (navigator.xr) {
          navigator.xr.isSessionSupported("immersive-ar").then((supported) => {
            xrButton.enabled = supported;
          });
        }
      }

      function onRequestSession() {
        return navigator.xr
          .requestSession("immersive-ar", {
            requiredFeatures: ["local", "hit-test"],
          })
          .then((session) => {
            xrButton.setSession(session);
            onSessionStarted(session);
          });
      }

      function onSessionStarted(session) {
        session.addEventListener("end", onSessionEnded);
        session.addEventListener("select", onSelect);

        if (!gl) {
          gl = createWebGLContext({
            xrCompatible: true,
          });

          renderer = new Renderer(gl);

          scene.setRenderer(renderer);
        }

        session.updateRenderState({ baseLayer: new XRWebGLLayer(session, gl) });

        // In this sample we want to cast a ray straight out from the viewer's
        // position and render a reticle where it intersects with a real world
        // surface. To do this we first get the viewer space, then create a
        // hitTestSource that tracks it.
        session.requestReferenceSpace("viewer").then((refSpace) => {
          xrViewerSpace = refSpace;
          session
            .requestHitTestSource({ space: xrViewerSpace })
            .then((hitTestSource) => {
              xrHitTestSource = hitTestSource;
            });
        });

        session.requestReferenceSpace("local").then((refSpace) => {
          xrRefSpace = refSpace;

          session.requestAnimationFrame(onXRFrame);
        });
      }

      function onEndSession(session) {
        xrHitTestSource.cancel();
        xrHitTestSource = null;
        session.end();
      }

      function onSessionEnded(event) {
        xrButton.setSession(null);
      }

      // Adds a new object to the scene at the
      // specified transform.
      function addARObjectAt(matrix) {
        let newFlower = arObject.clone();

        newFlower.visible = true;
        newFlower.matrix = matrix;

        scene.addNode(newFlower);

        flowers.push(newFlower);

        // For performance reasons if we add too many objects start
        // removing the oldest ones to keep the scene complexity
        // from growing too much.
        if (flowers.length > MAX_FLOWERS) {
          reticle.visible = false;
          let oldFlower = flowers.shift();

          scene.removeNode(oldFlower);
        }
      }

      let rayOrigin = vec3.create();
      let rayDirection = vec3.create();
      function onSelect(event) {
        if (reticle.visible) {
          // The reticle should already be positioned at the latest hit point,
          // so we can just use it's matrix to save an unnecessary call to
          // event.frame.getHitTestResults.
          addARObjectAt(reticle.matrix);
        }
      }

      // Called every time a XRSession requests that a new frame be drawn.
      function onXRFrame(t, frame) {
        let session = frame.session;
        let pose = frame.getViewerPose(xrRefSpace);

        reticle.visible = false;

        // If we have a hit test source, get its results for the frame
        // and use the pose to display a reticle in the scene.
        if (xrHitTestSource && pose) {
          let hitTestResults = frame.getHitTestResults(xrHitTestSource);
          if (hitTestResults.length > 0) {
            let pose = hitTestResults[0].getPose(xrRefSpace);
            reticle.visible = true;
            reticle.matrix = pose.transform.matrix;
          }
        }

        scene.startFrame();

        session.requestAnimationFrame(onXRFrame);

        scene.drawXRFrame(frame, pose);

        scene.endFrame();
      }

      // Start the XR application.
      initXR();
    </script>
            </div>
            <div class="avis_client">
                <h2>Avis Clients</h2>
                <ul>
                    <li>
                        <ul>
                            <li>
                                <img src="/img/silhouette-of-a-man-36181_640.png" alt="icone personne">
                            </li>
                            <li>
                                <p>Nom client</p>
                                <img src="/img/Rating-Star-Transparent-PNG.png" alt="icone personne">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum sapiente reiciendis modi at.</p>

                            </li>
                            <li>
                                <div class="btavis_client">
                                    <a href="cree_prod.php">Voir Avis</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li>
                                <img src="/img/silhouette-of-a-man-36181_640.png" alt="icone personne">
                            </li>
                            <li>
                                <p>Nom client</p>
                                <img src="/img/Rating-Star-Transparent-PNG.png" alt="icone personne">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum sapiente reiciendis modi at.</p>

                            </li>
                            <li>
                                <div class="btavis_client">
                                    <a href="cree_prod.php">Voir Avis</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
    </main>
    <?php
    include './modules/footer.php'

    ?>
</body>

</html>