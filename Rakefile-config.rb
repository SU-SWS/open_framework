require 'pathname'
rootdir = File.dirname(Pathname.new(__FILE__).realpath)

# True to compile in debug mode (no minification)
WebBlocks.config[:build][:debug] = false

# The directory into which WebBlocks is built
WebBlocks.config[:build][:dir] = "#{rootdir}/build"

# The directory where sources for the build are located
WebBlocks.config[:src][:dir] = "#{rootdir}/src"

# Location of WebBlocks core components (config.rb, definitions, core adapter)
WebBlocks.config[:src][:core][:dir] = "#{rootdir}/vendor/ucla/WebBlocks/src/core"

# Location of WebBlocks adapters
WebBlocks.config[:src][:adapters][:dir] = "#{rootdir}/vendor/ucla/WebBlocks/src/adapter"

# Location of WebBlocks extensions directory
WebBlocks.config[:src][:extension][:dir] = "#{rootdir}/vendor/ucla/WebBlocks/src/extension"

WebBlocks.config[:src][:adapter] = false

WebBlocks.config[:package][:bootstrap][:scripts] << 'modal'
WebBlocks.config[:package][:bootstrap][:scripts] << 'tooltip'
WebBlocks.config[:package][:bootstrap][:scripts] << 'popover'
