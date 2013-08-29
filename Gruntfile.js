(function() {
  module.exports = function(grunt) {
    return grunt.initConfig({
      sass: {
        compile: {
          expand: true,
          src: 'sass/main.scss',
		  dest: 'stylesheets',
          ext: ".css"
        }
      },
      watch: {
        files: ['sass/main.scss'],
        tasks: ['sass:compile']
      }
    }, grunt.loadNpmTasks('grunt-contrib-sass'), grunt.loadNpmTasks('grunt-contrib-watch'), grunt.registerTask('default', ['watch']));
  };

}).call(this);
