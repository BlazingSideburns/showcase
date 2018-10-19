<?php
$output = "
<div class='flex-container'>
    <div class='flex-row'>
        <div class='flex-col'>
            <div class='flex-item' id='sfp1g'></div>
            <div class='flex-item' id='sfp10g'></div>
        </div>
    </div>
    <div class='flex-row'>
        <div class='flex-col'>
            <div class='flex-item' id='glct'></div>
            <div class='flex-item' id='xfp'></div>
        </div>
    </div>
    <div class='flex-row'>
        <div class='flex-col'>
            <div class='flex-item' id='qsfplc'></div>
            <div class='flex-item' id='qsfpmpo'></div>
        </div>
    </div>
</div>

<script>
    var types = [
        'sfp1g',
        'sfp10g',
        'glct',
        'xfp',
        'qsfplc',
        'qsfpmpo'
    ];

    var scene = new THREE.Scene();
    var camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 0.1, 1000);
    var renderer = new THREE.WebGLRenderer({antialias: true});
    var controls = new THREE.OrbitControls(camera, renderer.domElement);
    var loader = new THREE.STLLoader();
    
    renderer.setSize(element.width, element.height);
    renderer.shadowMap.enabled = true;
    renderer.shadowMap.type = THREE.PCFSoftShadowMap;
	renderer.gammaInput = true;
	renderer.gammaOutput = true;
    
    controls.maxPolarAngle = (Math.PI / 2);
    
    scene.background = new THREE.Color('black');
    
    var rectLight = new THREE.RectAreaLight(0xffffff, 1, 10, 10);
    rectLight.position.set([50, 50, 50]);
    scene.add(rectLight);
    
    for (var i=0; i<types.length; i++) {
        var type = types[i];
        var path = '/images/models/' + type;
        var element = document.getElementById(type);
        element.appendChild(renderer.domElement);
        
        var material;
        var mesh;
        switch (type) {
            case 'glct' || 'qsfpmpo':
                material = new THREE.MeshStandardMaterial({color: 0x000000, metalness: 0, roughness: 1})
                material.side = THREE.DoubleSide;
                material.flatShading = false;
                loader.load(path + '_black.stl', function(geometry) {
                    mesh = new THREE.Mesh(geometry, material);
                    mesh.rotation.x = (Math.PI / 2);
                    scene.add(mesh)
                });
                material = new THREE.MeshStandardMaterial({color: 0xF0E688, metalness: 0.8, roughness: 0.5})
                material.side = THREE.DoubleSide;
                material.flatShading = false;
                loader.load(path + '_copper.stl', function(geometry) {
                    mesh = new THREE.Mesh(geometry, material);
                    mesh.rotation.x = (Math.PI / 2);
                    scene.add(mesh)
                });
            default:
                material = new THREE.MeshStandardMaterial({color: 0x000000, metalness: 0.9, roughness: 0.7})
                material.side = THREE.DoubleSide;
                material.flatShading = false;
                loader.load(path + '.stl', function(geometry) {
                    mesh = new THREE.Mesh(geometry, material);
                    mesh.rotation.x = (Math.PI / 2);
                    scene.add(mesh)
                });
                break;
                    
        }
    };
    
</script>
";