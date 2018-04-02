module.exports = function(grunt){
	// Configuration
	grunt.initConfig({
	 	//pass in optoins to plugin, references to files
	 	watch:{
	 		options :{
	 			livereload: true
	 		},
	 		php: {
	 			files: ['**/*.php'],
	 			options: {
	 				livereload: 35729
	 			}
	 		},
	 		css: {
	 			files: ['./assets/css/style.css'],
	 			tasks: [],
	 			options: {
	 				livereload: 35729
	 			}
	 		},
	 		sass: {
	 			files: ['assets/sass/*.scss'],
	 			tasks : ['sass','autoprefixer'],
	 			options: {
	 				spawn: true,
	 				livereload: false
	 			}
	 		},
	 		js: {
	 			files: ['**/*.js'],
	 			options: {
	 				livereload: 35729
	 			}
	 		}
	 	},
	 	sass: {
	 		dist: {
	 			options: {
	 				style: 'compressed'
	 			},
	 			files: {                         
	 				'./assets/css/style.css': './assets/sass/style.scss'
	 			}
	 		}
	 	},
	 	autoprefixer:{
	 		options: {
	 			processors: require('autoprefixer-core'),
	 			browsers: [ 'last 2 version', 'ie 10'],
	 		},
	 		dist:{
	 			files:{
	 				'./assets/css/style.css':'./assets/css/style.css'
	 			}
	 		}
	 	},
	 });
	// Load Plugins

	// grunt.loadNpmTasks('')
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.loadNpmTasks('grunt-sass');

	// Register Tasks
	grunt.registerTask('run', function(){
	})

	grunt.registerTask('all',['watch'],['sass']);

};