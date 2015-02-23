// Initialize appendGrid
    $('#presence').appendGrid({
        caption: 'Suggest Presence that you want to offer to the sponsors in return for their sponsorships',
        initRows: 1,
        columns: [
                { name: 'presence', display: 'Presence Type', type: 'select', ctrlCss: { width: '150px'} ,ctrlOptions: { 0: '--SELECT--', 1: 'Title Sponsor', 2: 'Speaking Time', 3: 'Digital Marketing', 4: 'Print Media Marketing', 5: 'Canvassing', 6: 'Emcee Mention', 7: 'Goodie Bag', 8: 'Prize', 9: 'Endorsement', 10: 'Booth Space', 11: 'Activity', 12: 'Product Placement', 13: 'Market Research', 14: 'Talent Acquisition', 15: 'Others'} },
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