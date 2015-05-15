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
        src:['bower_components/bootstrap/dist/js/bootstrap.min.js','bower_components/matchHeight/jquery.matchHeight-min.js','public_dev/js/frontend.js' ],
        dest: 'public/js/frontend.js'
      },
      angularJS:{
        src:[
          'bower_components/angular**/**.min.js',
          //'public_dev/angular/config.js',
          'public_dev/angular/*/app.js',
          'public_dev/angular/*/config/**.js',
          'public_dev/angular/*/controllers/**.js', 
          'public_dev/angular/*/services/**.js', 
          'public_dev/angular/*/directives/**.js', 
          'public_dev/angular/*/filters/**.js'
          ],
        dest: 'public/js/angular.js'
      }
    },
    uglify: {
      options: {
        banner: '<%= banner %>'
      },
      clientJS:{
        src: 'public/js/frontend.js',
        dest: 'public/js/frontend.js'
      },
      angularJS:{
        src: 'public/js/angular.js',
        dest: 'public/js/angular.min.js'
      }
    },
    less: {
      development: {
        options:{
          compress: true,
          yuicompress: true,
          optimization: 2
        },
        files:[
          {src: 'public_dev/less/common.less',dest: 'public/css/common.css'},
        ]
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
        files: ["public_dev/less/**.less"],
        tasks: ['less']
      },
      clientCSS: {
        files: ["public/css/**.css"],
        //tasks: [''],
        options: {
          livereload: true
        }
      },
      html:{
        files: ['public/*.html'],
        options:{
          livereload: true
        }
      },
      clientJS: {
        files: ["public_dev/js/*.js"],
        tasks: ['concat:clientJS', 'uglify:clientJS'],
        options: {
          livereload: true
        }
      },
      angularJS: {
        files: ['public_dev/angular/**.js','public_dev/angular/**/**.js'],
        tasks: ['concat:angularJS', 'uglify:angularJS'],
        options: {
          livereload: true
        }
      }
    }
  });

  // These plugins provide necessary tasks.
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-less');

  // Default task.
  grunt.registerTask('default', ['jshint', 'concat', 'uglify', 'watch']);

};
