import resolve from 'rollup-plugin-node-resolve';
import babel from 'rollup-plugin-babel';
import scss from 'rollup-plugin-scss'
import commonjs from '@rollup/plugin-commonjs';
import typescript from '@rollup/plugin-typescript';
import {terser} from "rollup-plugin-terser";
import cleanup from 'rollup-plugin-cleanup';

export default [{
	input: ['src/index.ts'],
	output: {
		file: 'dist/main.js',
        format: 'es',
    	sourcemap: true,
	},
	plugins: [
    resolve(),
    babel({
        babelrc: false,
        presets: [
            [
                '@babel/preset-env',
                {
                    targets: {
                        ie: '11',
                    },
                },
            ],
        ],
    }),
    scss(),
    commonjs(),
    typescript(),
    terser(),
    cleanup()
  ]
},
{
    input: 'src/polyfill.js',
    output: {
      file: 'dist/polyfill.js',
      format: 'iife',
    },
    plugins: [
        commonjs({ include: ['node_modules/**'] }), 
        resolve()
    ],
},
];