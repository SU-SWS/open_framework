# WebBlocks Example Integration

**[WebBlocks](http://ucla.github.io/WebBlocks)** is a platform based on modern web technologies for building full-featured, responsive sites. It leverages best-in-breed web tools, defines semantics based on modern web standards and includes a large suite of UI elements and Javascript interactivity libraries. Beyond this, WebBlocks is a highly modular toolkit that can be customized to meet business needs, fitted to different development paradigms and integrated into existing web solutions.

**WebBlocks Example Integration** is a skeleton built to demonstrate how WebBlocks can be integrated into other applications. Using WebBlocks as a Git submodule, it hooks into the WebBlocks compiler via a call-forward while versioning sources and producing output within the host repository.

## Usage

The following commands may be used to set up the environment and initiate a build:

```
bundle
rake
```

Any WebBlocks task may be invoked via this call-forward, and additionally this example adds `setup` and `destroy` tasks to manage the Git submodule and WebBlocks's requisite Ruby gems and Node.js packages. In order to use this example, one must first install Git, Ruby, RubyGems, Bundler, Node.js and NPM (see the [WebBlocks Environment](http://ucla.github.io/WebBlocks/doc/#Configuration/Environment) documentation for more details).

Based on `Rakefile-config.rb`, sources are drawn from `src`, the compiler is invoked from under `vendor/ucla/WebBlocks` and the build is produced into `build`.

## Status

The WebBlocks Example Integration is currently **STABLE**.

## License

The WebBlocks Example Integration is open-source software licensed under the BSD 3-clause license. The full text of the license may be found in the [LICENSE file](https://github.com/ebollens/WebBlocks-example-integration/blob/master/LICENSE) on online in the GitHub repository.

## Credits

The WebBlocks Example Integration is a component of the WebBlocks initiative, an open-source collaboration involving the University of California, the Mobility and the Modern Web community and others.

The author of the WebBlocks Example Integration is **Eric Bollens**.
