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
2) `wp scaffold plugin gutenworkshop -activate`
3) Once your plugin is activated, you'll need to scaffold out a Gutenberg block and assign it to that plugin.
4) `wp scaffold block gutenblock --title="Gutenblock" --dashicon="wordpress" --category="widget" --plugin="gutenworkshop"`
5) After following these steps you should have a plugin with a new custom gutenberg block. With this setup, you can add as many blocks as you like. Go ahead and add a 2 more blocks, call the first `gutencamp` and the second `gutenapi`, make sure that you are always binding the blocks to the same plugin. 
6) Theres no fancy transpiling here. The output of the JS files will be vanilla javascript. If you want you could add Babel, Webpack and Gulp.
