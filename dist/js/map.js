// Add this after your form
IdealPostcodes.PostcodeLookup.setup({
    // Add your API key
    apiKey: 'ak_htaapr1fkpQCzbA66WHfMRAIjotF5',
    // Identify a container for postcode lookup
    context: '#lookup_field',
    // Identify your fields with CSS selectors
    outputFields: {
        line_1: '#first_line',
        line_2: '#second_line',
        line_3: '#third_line',
        post_town: '#post_town',
        postcode: '#postcode'

    }

});