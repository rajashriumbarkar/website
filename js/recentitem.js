 // This the code for select tree categery form the recent search
 
 function toggleDropdown() {
            const recentItems = document
                .getElementById('recentItems');
            recentItems.style.display = recentItems
                .style
                .display === 'block' ? 'none' : 'block';
        }

        document
            .getElementById('recentSearch')
            .addEventListener('input', function () 
            {
                const filter = this
                    .value
                    .toUpperCase();
                const items = document
                    .getElementsByClassName('recent-item');

                for (let i = 0; i < items.length; i++) {
                    const item = items[i];
                    const txtValue = item.textContent || item.innerText;
                    item
                        .style
                        .display = txtValue
                            .toUpperCase()
                            .includes(filter) ? '' : 'none';
                }
            });

        document
            .addEventListener('click', function (event)
            {
                const dropdown = document
                    .querySelector('.recent');
                if (!dropdown.contains(event.target))
                {
                    document
                        .getElementById('recentItems')
                        .style
                        .display = 'none';
                }
            });

        document
            .getElementById('recentItems')
            .addEventListener('click', function (event) 
            {
                event.stopPropagation();
            });
