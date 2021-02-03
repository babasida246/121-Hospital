const path = require('path');

module.exports = {
    resolve: {
        alias: {
            '@': path.resolve('resources/js'),
            '@jscomponents': path.resolve('resources/js/Components'),
            '@css': path.resolve('resources/css'),
            '@scss': path.resolve('resources/scss'),  
            '@fonts': path.resolve('resources/fonts'),
            '@jscomponents_admin': path.resolve('resources/js/Components/Admin'),      
        },
    },
};
