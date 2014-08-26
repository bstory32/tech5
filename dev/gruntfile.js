module.exports = function(grunt){
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-compass');
	grunt.loadNpmTasks('grunt-contrib-copy');

	grunt.initConfig({
		copy:{
			main:{
				files: [
				{expand: true, src: ['public/**'], dest: '../'}
				]

			},//main
			images:{
				files: [
				{expand: true,
					cwd: 'images/',
				 src: ['**/*'], dest: 'public/images', filter: 'isFile'}
				]
			} 
		},//copy
		uglify:{
			my_target:{
				files:{
					'public/js/scripts.js' : ['lib/jQuery/jquery-1.11.1.min.js','lib/bootstrap/js/bootstrap.min.js','js/**/*.js']
				}//files
			}//my targe
		},//uglify
		compass:{
			dev:{
				options:{
					config: 'config.rb'
				}//options
			}//dev
		},//compass
		watch:{
			scripts:{
				files: ['js/**/*.js'],
				tasks:['uglify', 'copy:main']
			},//scripts
			sass:{
				files: ['sass/**/*.scss'],
				tasks:['compass:dev', 'copy:main']
			},//sass
			images:{
				files:['images/*'],
				tasks: ['copy:images', 'copy:main']
			}

		}//watch

})//init config
	grunt.registerTask('default', 'watch');

	grunt.registerTask('dev', ['copy:main', 'uglify', 'compass', ])
} //exports