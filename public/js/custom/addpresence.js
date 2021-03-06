// Initialize appendGrid
    $('#presence').appendGrid({
        caption: 'Suggest Presence that you want to offer to the sponsors in return for their sponsorships',
        initRows: 1,
        columns: [
                { name: 'presence', display: 'Presence Type', type: 'select', ctrlCss: { width: '150px'} ,ctrlOptions: { 0: '--SELECT--', 1: 'Title Sponsor', 2: 'Speaking Time', 3: 'Digital Marketing', 4: 'Print Media Marketing', 5: 'Canvassing', 6: 'Emcee Mention', 7: 'Goodie Bag', 8: 'Prize', 9: 'Endorsement', 10: 'Booth Space', 11: 'Activity', 12: 'Product Placement', 13: 'Market Research', 14: 'Talent Acquisition', 15: 'Others'} },
                { name: 'description', display: 'Description', type: 'textarea', ctrlAttr: { maxlength: 300, rows:5, 'data-toggle':'tooltip','data-original-title':'Let the sponsor know more details about how you can help them promote their brand through this presence'}, ctrlCss: { width: '300px'} },
                { name: 'price', display: 'Cost', type: 'text', ctrlAttr: { maxlength: 6, placeholder:'$', 'data-toggle':'tooltip','data-original-title':'For in-kind sponsorship, enter $0' }, ctrlCss: { width: '80px'} },
                { name: 'slot', display: 'Quantity', type: 'number', ctrlAttr: { min:1, 'data-toggle':'tooltip','data-original-title':'How many sponsors can sponsor this Presence?' }, ctrlCss: { width: '70px'} },
                { name: 'recordId', type: 'hidden', value: 0 }
            ]
    })
    // Handle `Serialize` button click
    $('#btnSerialize').button().click(function () {
        alert('Here is the serialized data!!\n' + $(document.forms[0]).serialize());
    })