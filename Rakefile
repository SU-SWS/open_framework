ROOT_DIR = File.dirname(Pathname.new(__FILE__).realpath)
WEBBLOCKS_DIR = 'vendor/ucla/WebBlocks'

# # # # # # # # # # # # # # # # # # # # # # # # # # # # #
# Utility class that calls forward to WebBlocks rake

require 'pathname'
require 'fileutils'
require 'bundler'

class WebBlocks
  
  attr_accessor :path
  
  def initialize path
    @path = path
  end
  
  def setup
    Dir.chdir @path do
      Bundler.with_clean_env do
        sh "bundle"
        sh "npm install"
      end
    end
  end
  
  def rake command = ''
    setup
    Dir.chdir @path do
      Bundler.with_clean_env do
        sh "rake #{command} -- --config=#{ROOT_DIR}/Rakefile-config.rb"
      end
    end
  end
  
end

# # # # # # # # # # # # # # # # # # # # # # # # # # # # #
# Set path to WebBlocks

blocks = WebBlocks.new WEBBLOCKS_DIR

# # # # # # # # # # # # # # # # # # # # # # # # # # # # #
# Define the valid Rake tasks that will be call-forwarded

include Rake::DSL

task :setup do
  
  IO.popen("git rev-parse --show-toplevel") do |io|
    Dir.chdir(io.gets.strip) do
      sh "git submodule init"
      sh "git submodule update"
    end
  end
  
  blocks.setup
  
end

task :destroy do
  
  begin
    blocks.rake 'reset'
  rescue
    # ignore if it doesn't work
  end
  
  Dir.chdir ROOT_DIR do
    FileUtils.rm_rf "vendor"
  end
  
end

task :default => [:build] 

task :init => [:setup] do
  blocks.rake 'init'
end

task :build => [:setup] do
  blocks.rake 'build'
end

task :build_all => [:setup] do
  blocks.rake 'build_all'
end

task :build_css => [:setup] do
  blocks.rake 'build_css'
end

task :build_img => [:setup] do
  blocks.rake 'build_img'
end

task :build_js => [:setup] do
  blocks.rake 'build_js'
end

task :clean => [:setup] do
  blocks.rake 'clean'
end

task :clean_packages => [:setup] do
  blocks.rake 'clean_packages'
end

task :clean_all => [:setup] do
  blocks.rake 'clean_all'
end

task :reset_packages => [:setup] do
  blocks.rake 'reset_packages'
end

task :reset => [:setup] do
  blocks.rake 'reset'
end
