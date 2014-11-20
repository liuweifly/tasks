module.exports = function(grunt) {
 
    grunt.initConfig({
        pkg : grunt.file.readJSON('package.json'),
        coffee: {
            compile: {
                // 选项
                options: {},
                // 指定文件编译
                files: {
                    // 1:1 compile
                    '../src/scripts/result.js': '../src/scripts/source.coffee', 
                    // compile and concat into single file
                    // '../src/scripts/another.js': ['../src/scripts/sources/*.coffee', '../src/scripts/more/*.coffee'] 
                }
            },
            // 实时编译，1:1
            glob_to_multiple: {
                expand: true,
                flatten: true,
                cwd: '../src/scripts/',
                src: ['*.coffee'],
                dest: '../src/scripts/',
                ext: '.js'
                // 后面还可以继续写cwd~ext内容
            }
        },
        less: {
            compile: {
                options: {},
                files: {
                    '<%= pkg.name %>.css': '<%= pkg.name %>.less',
                    // '../src/styles/another.css': ['../src/styles/sources/*.less', '../src/styles/more/*.less'] 
                }
            },
            glob_to_multiple: {
                expand: true,
                flatten: true,
                cwd: '../src/styles/',
                src: ['*.less'],
                dest: '../src/styles/',
                ext: '.css'
            }
        },
        // 合并文件
        concat : {
            css : {
                files: {
                    // des: src对应关系
                    '../src/dest/result.css': ['../src/styles/**/*.css']
                }
            },
            js : {
                files: {
                    '../src/dest/result.js': ['../src/scripts/**/*.js']
                }
            }
        },
        // 压缩JS
        uglify : {
            options : {
                banner : '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
            },
            build : {
                src : '../src/dest/*.js',
                dest : '../src/dest/result.min.js'
            }
        },
        watch: {
            // 写任务名称，然后写监控文件，使用的任务,
            // 多个文件夹监听，要追个写出到files数组中
            coffee: {
                files: ['src/scripts/*.coffee'],
                tasks: ['coffee:glob_to_multiple']
            },
            less: {
                files: ['<%= pkg.name %>.less'],
                tasks: ['less:compile']
            }
        }
    });
 
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-coffee');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
 
    grunt.registerTask('default', ['watch:less']);
 
};