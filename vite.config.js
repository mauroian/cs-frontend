// vite.config.js
import { defineConfig } from 'vite';
import { fileURLToPath } from 'node:url';
import usePHP from 'vite-plugin-php';
import { viteStaticCopy } from 'vite-plugin-static-copy';
import { ViteEjsPlugin } from 'vite-plugin-ejs';
import { imagetools } from 'vite-imagetools';

export default defineConfig(({ command }) => {
  const publicBasePath = '';   
  // Change if deploying under a nested public path. Needs to end with a /. See https://vitejs.dev/guide/build.html#public-base-path
  //MI:   const publicBasePath = ''; is ok to deploy on test.comeandsee.org
  //MI:   const publicBasePath = '/cs-frontend-2/';  is ok to deploy on www/cs-frontend-2 under my WAMP
  
  const base = command === 'serve' ? '/' : publicBasePath;
  const BASE = base.substring(0, base.length - 1);

  return {
    base,
    plugins: [
      imagetools(),
      usePHP({
        entry: [
          'index.php',
          './**/*.php',
        ],
      }),
      ViteEjsPlugin({
        BASE,
      }),
      viteStaticCopy({
        targets: [
        //  { src: 'public', dest: '' },
        ],
        silent: command === 'serve',
      }),
    ],
    define: {
      'BASE': JSON.stringify(BASE),
      'import.meta.env.BASE': JSON.stringify(BASE),
    },
    resolve: {
      alias: {
        '~/': fileURLToPath(new URL('./src/', import.meta.url)),
      },
    },
    publicDir: command === 'build' ? 'raw' : 'public',
    css: {
      preprocessorOptions: {
        scss: {
          api: 'modern-compiler',
        },
      },
    },
    server: {
      port: 3000,
    },
    build: {
      assetsDir: 'public',
      emptyOutDir: true,
    },
  };
});