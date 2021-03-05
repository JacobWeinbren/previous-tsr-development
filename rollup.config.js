import commonjs from "@rollup/plugin-commonjs";
import resolve from 'rollup-plugin-node-resolve';
import scss from 'rollup-plugin-scss';
import { terser } from "rollup-plugin-terser";

export default {
  input: 'src/index.js',
  output: {
    dir: 'build',
    format: 'iife',
    compact: true
  },
  plugins: [
    resolve({
      browser: true,
    }),
    commonjs(),
    scss({
    	outputStyle: "compressed"
    }),
    terser()
  ]
};