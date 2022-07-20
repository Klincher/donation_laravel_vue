import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import AutoImport from "unplugin-auto-import/vite";
import Components from "unplugin-vue-components/vite";
import { ElementPlusResolver } from "unplugin-vue-components/resolvers";

export default defineConfig({
    plugins: [
        laravel(["resources/css/app.css", "resources/js/app.js"]),

        AutoImport({
            resolvers: [ElementPlusResolver()],
        }),
        Components({
            resolvers: [ElementPlusResolver()],
        }),
    ],
});
