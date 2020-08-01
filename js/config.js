


// initialize our requirejs methods and options

requirejs.config({
    baseUrl: 'js',

    // These are standard methods to call
    paths: {
        // these are all our names and associated locations for their JS files
        jquery: [
            'https://code.jquery.com/jquery-3.5.1.min',
            'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min',
            'node_modules/jquery/dist/jquery.min'
        ],
        initBootstrap: 'customScripts/initBootstrap',
        bootstrap: 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min',
        popper: 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min',
        methods: 'customScripts/methods'
    },

    // These are legacy methods to call which will require a browser global 
    // as their dependencies are not defined via define()
    shim: {
        'bootstrap': [
            'jquery'
        ]
    }
});
