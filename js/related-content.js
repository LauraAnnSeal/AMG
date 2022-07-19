const descriptions = document.querySelectorAll('.search-description')
    
    if(descriptions){
        descriptions.forEach(text => {
        let string = ''
        text.querySelectorAll('p').forEach(para => {
            string += para.innerText
        })
        let maxLength = 200

        //trim the string to the maximum length
        let trimmedString = string.substr(0, maxLength);

        //re-trim if we are in the middle of a word
        trimmedString = trimmedString.substr(0, Math.min(trimmedString.length, trimmedString.lastIndexOf(" ")))
        
        // add text back into div
        text.innerText = trimmedString + '...'
    })
    }

	const searchBar = document.querySelectorAll('#is-search-input-90')
	searchBar.forEach(bar => {
		bar.setAttribute('value', '')
	})