const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const path = require('path');
const sass = require('node-sass');
const autoprefixer = require('autoprefixer');

module.exports = {
	output: {
		filename: 'main.js',
	},
	performance: {
		hints: false,
	},

	module: {
		rules: [{
			test: /\.scss$/,
			include: [
				path.resolve(__dirname, 'src'),
                path.resolve(__dirname, 'node_modules'),
                path.resolve(__dirname, 'node_modules/@carbon'),
                path.resolve(__dirname, 'node_modules/carbon-components'),
            ],
			use: [
				MiniCssExtractPlugin.loader,
				{
					loader: 'css-loader',
   					options: {
      					importLoaders: 2,
      					sourceMap: true,
    				},
  				},
  				{
    				loader: 'postcss-loader',
    				options: {
      					postcssOptions: {
        					plugins: [autoprefixer],
      					},
    				},
 				},
  				{
    				loader: 'sass-loader',
    				options: {
      					implementation: sass,
      					sassOptions: {
       						includePaths: ['node_modules'],
        					data: `
          						$feature-flags: (
            						enable-css-custom-properties: true,
            					grid-columns-16: true,
          						);
        					`,
      					},
    				},
  				},
			],
      		}],
  	},
 
	plugins: [
		new MiniCssExtractPlugin({
			filename: "[name].css",
		})
  	],
};