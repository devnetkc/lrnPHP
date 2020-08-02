// initialize page load by requiring your js files here

require(['config'], function(){
    // add all other required scripts here
        fs = '/';
        csDir = 'customScripts';
        csDirFs = csDir + fs;

        csList = [
            csDirFs + 'gtag',
            csDirFs + 'jqueryFile'    
        ];


        function loadRequirements (csFile, index) {
            require([csFile]);
        }

        // Now that the array is set with our files, lets add them as requirements
        csList.forEach(loadRequirements);

});

