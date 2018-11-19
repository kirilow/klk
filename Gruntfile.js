module.export = function( grunt ){
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        uglify: {
            options: {
                mangle: true
            },
            build: {
                src: "pub/js/*.js",
                dest: "pub/js/min/script.js"
            }
        }
//        cssmin: {
//            combine: {
//                files:{
//                    'pub/css/klk.css':[
//                        'pub/css/main.css',
//                        'pub/css/klk_slider.css'
//                    ]
//                }
//            }
//        }
    });
    
    grunt.loadNpmTasks("grunt-contrib-uglify");

    grunt.registerTask('default', ["uglify"]);
    
    
    
}