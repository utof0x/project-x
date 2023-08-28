// Header gender buttons logic --start
document.querySelectorAll('.show-additional-header-content')
    .forEach((headerButton) => {
            headerButton.addEventListener('mouseenter', () => {
                const gender = headerButton.getAttribute('data-gender');

                if (gender === 'male') {
                    document.querySelectorAll('.female-only').forEach((el) => {
                        el.classList.add('hidden');
                    });
                } else if (gender === 'female') {
                    document.querySelectorAll('.male-only').forEach((el) => {
                        el.classList.add('hidden');
                    });
                }

                document.querySelector('.additional-header-content').classList.remove('hidden');

                document.querySelectorAll('a').forEach((el) => {
                    const currentUrl = new URL(el.href);
                    const urlCurrentGender = currentUrl.searchParams.get('gender');

                    if (gender !== urlCurrentGender) {
                        currentUrl.searchParams.set('gender', gender);
                        el.href = currentUrl.toString();
                    }
                });
            });

            headerButton.addEventListener('mouseleave', () => {
                document.querySelectorAll('.male-only, .female-only')
                    .forEach((el) => el.classList.remove('hidden'));

                document.querySelector('.additional-header-content').classList.add('hidden');
            })
        }
    );

document.querySelector('.additional-header-content')
    .addEventListener('mouseenter', () =>
        document.querySelector('.additional-header-content').classList.remove('hidden'));

document.querySelector('.additional-header-content')
    .addEventListener('mouseleave', () =>
        document.querySelector('.additional-header-content').classList.add('hidden'));

// Header gender buttons logic --end
