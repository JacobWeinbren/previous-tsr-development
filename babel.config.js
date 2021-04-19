const plugins = [
  '@babel/plugin-proposal-class-properties',
  ['@babel/proposal-decorators', { decoratorsBeforeExport: true } ],
];

module.exports = { plugins: plugins, exclude: 'node_modules/babel-runtime/**', };