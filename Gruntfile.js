module.exports = function (grunt) {
    grunt.initConfig({
        copy: {
            main: {
                files: [
                    {
                        expand: true,
                        flatten: true,
                        src: ['vendor/bower/materialize/dist/fonts/roboto/*'],
                        dest: 'web/fonts/'
                    }
                ]
            }
        }
    });
    grunt.loadNpmTasks('grunt-contrib-copy');
}