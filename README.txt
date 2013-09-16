Open Framework Theme for Drupal 7.x

Authors: Brian Young, Megan Erin Miller

-- SUMMARY -- 

Open Framework is a new Drupal theme that builds off of Twitter Bootstrap and provides a simple yet powerful way to create complex responsive layouts.  For more information, visit http://openframework.stanford.edu

-- REQUIREMENTS --

The Open Framework theme is intended for Drupal version 7 only; it will not work with Drupal 6 or below.

-- INSTALLATION --

Download and extract the theme package in your sites/all/themes directory. 

Build WebBlocks with the commands:

$ bundle
$ rake

The first time called, these operations may take a long period of time; subsequent calls will be shorter.

In order to compile WebBlocks as above, you must first install Git, Ruby, RubyGems, Node.js and NPM (see http://ucla.github.io/WebBlocks/doc/#Configuration/Environment for installation instructions).

Any WebBlocks task may be invoked via this call-forward (see http://ucla.github.io/WebBlocks/doc/#Configuration/Compiler for details), and additionally this example adds `setup` and `destroy` tasks to manage the Git submodule and WebBlocks's requisite Ruby gems and Node.js packages.

Based on `Rakefile-config.rb`, sources are drawn from `src`, the compiler is invoked from under `vendor/ucla/WebBlocks` and the build is produced into `build`.

As an admin, go to Administration > Appearance to enable the theme.

-- TROUBLESHOOTING --

If you encounter an issue while using this theme, please post it as a bug or feature request on GitHub issues: http://github.com/SU-SWS/open_framework/issues
