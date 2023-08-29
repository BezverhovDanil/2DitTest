let accordeon = document.querySelectorAll('.accordeon');
        
            accordeon.forEach(clickAccordeon => {
                clickAccordeon.addEventListener('click', () => {
                    clickAccordeon.classList.toggle('active');
                });
            });
        
            function formatPhoneNumber(input) {
                const phoneNumber = input.value.replace(/\D/g, ''); 
                if (phoneNumber.length <= 10) {
                    input.value = '+7(' + phoneNumber.slice(0, 3) + ')' + '-' + phoneNumber.slice(3, 6) + '-' + phoneNumber.slice(7, 10);
                }
            }
        
            