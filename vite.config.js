import { defineConfig } from 'vite'
import { resolve } from 'path'
import tailwindcss from '@tailwindcss/vite'

export default defineConfig({
  plugins: [
    tailwindcss()
  ],
  publicDir: false,
  build: {
    outDir: 'public/assets',
    emptyOutDir: false, //  vai esvaziar o diretório de output - no caso o public/assets
    rollupOptions: {
      input: resolve(import.meta.dirname, 'src/index.js'),
      watch: {
        exclude: ['public/**', 'node_modules/**'],
      },
      output: {
        entryFileNames: 'js/bundle.js', // vai ler esse arquivo
        assetFileNames: (assetInfo) => {
          if (assetInfo.names?.some(name => name.endsWith('.css')) || assetInfo.name?.endsWith('.css')) {
            return 'css/style.css'
          }
          return 'assets/[name][extname]'
        }
      }
    }
  }
})