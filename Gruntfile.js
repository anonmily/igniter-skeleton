/*global module:false*/
module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    // Metadata.
    pkg: grunt.file.readJSON('package.json'),
    banner: '/* By Michelle Liu */\n',
    // Task configuration.
    concat: {
      options: {
        banner: '<%= banner %>',
        stripBanners: true
      },
      clientJS:{
        src:[ 'public_dev/js/frontend.js', 'public_dev/js/bootstrap.js'],
        dest: 'public/js/frontend.js'
      }
    },
    uglify: {
      options: {
        banner: '<%= banner %>'
      },
      clientJS:{
        src: 'public/js/frontend.js',
        dest: 'public/js/frontend.js'
      }
    },
    less: {
      development: {
        options:{
          compress: true,
          yuicompress: true,
          optimization: 2
        },
        files: {
          "public/css/bootstrap.css": "public_dev/less/common.less"
        }
      }

    },
    jshint: {
      options: {
        curly: true,
        eqeqeq: true,
        immed: true,
        latedef: true,
        newcap: true,
        noarg: true,
        sub: true,
        undef: true,
        unused: true,
        boss: true,
        eqnull: true,
        browser: true,
        globals: {}
      },
      gruntfile: {
        src: 'Gruntfile.js'
      },
      lib_test: {
        src: ['lib/**/*.js', 'test/**/*.js']
      }
    },
    watch: {
      gruntfile: {
        files: '<%= jshint.gruntfile.src %>',
        tasks: ['jshint:gruntfile']
      },
      lib_test: {
        files: '<%= jshint.lib_test.src %>',
        tasks: ['jshint:lib_test', 'qunit']
      },
      styles: {
        files: ["public_dev/less/*.less","public_dev/less/*/*.less"],
        tasks: ['less'],
        options: {
          livereload: true
        }
      },
      clientCSS: {
        files: ["public/css/*.less","public/css/*/*.css"],
        tasks: ['csslint'],
        options: {
          livereload: true
        }
      },
      clientJS: {
        files: ["public_dev/js/*.js"],
        tasks: ['concat:clientJS', 'uglify:clientJS'],
        options: {
          livereload: true
        }
      }
    }
  });

  // These plugins provide necessary tasks.
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-qunit');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task.
  grunt.registerTask('default', ['jshint', 'qunit', 'concat', 'uglify', 'watch']);

};
