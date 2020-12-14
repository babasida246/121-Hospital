const path = require('path');

module.exports = {
    resolve: {
        alias: {
            '@': path.resolve('resources/js'),
            '@img': path.resolve('public/img'),
        },
    },
};
