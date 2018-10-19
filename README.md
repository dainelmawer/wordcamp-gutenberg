# Welcome to WordCamp Cape Town!
## Gutenberg Workshop: A definitive guide to your first Gutenberg block.

Hej! 👋🏻
Glad to have you in the workshop! Today we're going to build 2, maybe 3 Gutenberg blocks (depending on how we go)
You can refer to this readme throughout the workshop in case you missed a step. I dont like "formal" workshops, so this will be super casual, no pressure.

Feel free to ask questions ☝🏻

## Getting Started
1) You'll want a fresh installation of WordPress, or a not so fresh one, either way, an environment where you can install Gutenberg and the plugin in this respository.
2) Install Gutenberg! Make sure its activated and that you dont get any errors - foundation strong should be as Yoda would say.
3) Fork or download the .zip of this repo. Its a plugin, incase you havent figured that out yet.
4) Make sure the plugin is installed, and active. To make sure its working, you should see the default block appended to the Widgets section in Gutenberg. If you dont see it, ☝🏻.

## Extra kudos
If you're an engineering wizard you can scaffold whats in this repository by yourself - (Make sure you are running at least v1.6 of the WP CLI)

1) Change directories to `wp-content/plugins`
```
wp scaffold plugin gutenworkshop -activate
```
2) Once your plugin is activated, you'll need to scaffold out a Gutenberg block and assign it to that plugin.
```
wp scaffold block gutenblock --title="Gutenblock" --dashicon="wordpress" --category="widget" --plugin="gutenworkshop"
```
3) After following these steps you should have a plugin with a new custom gutenberg block. With this setup, you can add as many blocks as you like. Go ahead and add a 2 more blocks, call the first `gutencamp` and the second `gutenapi`, make sure that you are always binding the blocks to the same plugin. 
4) Theres no fancy transpiling here. The output of the JS files will be vanilla javascript. If you want you could add Babel, Webpack and Gulp.

## Tutorials
Lets ditch powerpoint presentations for this workshop. Everything you need to work with is in this repo, and will be available locally once you download / clone down!

1) [Building a static block](../docs/static-block)
2) [Building a dynamic block](../docs/dynamic-block)
3) [Building a data block](../docs/data-block)

## Questions / Contact
If you have any questions or concerns during the course of the workshop, then open up a Github issue above. This allows me to track all your questions, and gives others a chance to contribute answers. 

Twitter: @dainemawer
Website: http://dainelindleymawer.me
10up: https://10up.com


