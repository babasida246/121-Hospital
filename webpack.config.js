const path = require('path');

module.exports = {
    resolve: {
        alias: {
            '@': path.resolve('resources/js'),
            '@jscomponent': path.resolve('resources/js/Components'),
            '@scss': path.resolve('resources/scss')          
        },
    },
};
