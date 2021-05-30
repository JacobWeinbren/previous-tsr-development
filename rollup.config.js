import resolve from 'rollup-plugin-node-resolve';
import babel from 'rollup-plugin-babel';
import scss from 'rollup-plugin-scss'
import commonjs from '@rollup/plugin-commonjs';
import typescript from '@rollup/plugin-typescript';

export default {
	input: ['src/index.ts'],
	output: {
		file: 'dist/main.js',
    format: 'cjs',
	sourcemap: true
	},
	plugins: [
    resolve(),
    babel(),
    scss(),
    commonjs(),
    typescript()
  ]
};