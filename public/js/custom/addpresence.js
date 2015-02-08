// Initialize appendGrid
    $('#presence').appendGrid({
        caption: 'Suggest Presence that you want to offer to the sponsors in return for their sponsorships',
        initRows: 1,
        columns: [
                { name: 'presence', display: 'Presence Type', type: 'select', ctrlCss: { width: '150px'} ,ctrlOptions: { 0: '--SELECT--', 1: 'Brand display on Event', 2: 'Emcee Shoutout', 3: 'Social Media Interaction', 4: 'Event booth', 5: 'Brand on Marketing Poster', 6: 'Brand on Flyer'} },
                { name: 'description', display: 'Description', type: 'text', ctrlAttr: { maxlength: 300 }, ctrlCss: { width: '300px'} },
                { name: 'price', display: 'Price', type: 'text', ctrlAttr: { maxlength: 6 }, ctrlCss: { width: '40px'} },
                { name: 'slot', display: 'Slots', type: 'number', ctrlAttr: { min:1 }, ctrlCss: { width: '50px'} },
                { name: 'recordId', type: 'hidden', value: 0 }
            ]
    })
    // Handle `Serialize` button click
    $('#btnSerialize').button().click(function () {
        alert('Here is the serialized data!!\n' + $(document.forms[0]).serialize());
    })