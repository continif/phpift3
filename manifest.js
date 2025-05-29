// filepath: /phpift3/phpift3/manifest.js
const manifest = {
    name: "PhpIFT³",
    version: "1.0.0",
    description: "A PHP library to implement the 'If This Then That' paradigm for building a queue of macro operations.",
    main: "src/IFT.php",
    scripts: {
        start: "php -S localhost:8000 -t src",
        test: "phpunit"
    },
    author: "Francesco",
    license: "MIT",
    dependencies: {
        "php": "^7.4 || ^8.0"
    }
};

export default manifest;