$(document).ready(function(){


    // NEWS PAGE

    $(document).on('click', '.page__news .show-more__btn', function(){

        const url =  $('.next.page-numbers').attr('href');   //  URL, из которого будем брать элементы
        const targetContainer = $('.page__news-items');          //  Контейнер, в котором хранятся элементы
        const paginationContainer = $('.page__pagination');    // Контейнер пагинации

        if (url !== undefined) {
            $.ajax({
                type: 'GET',
                url: url,
                dataType: 'html',
                success: function(data){

                    $('.page__pagination-wrapper').remove(); //  Удаляем старую навигацию

                    const elements = $(data).find('.page__news-item');  //  Ищем элементы
                    const pagination = $(data).find('.page__pagination-wrapper'); //  Ищем навигацию

                    targetContainer.append(elements);   //  Добавляем посты в конец контейнера
                    paginationContainer.append(pagination); //  Добавляем навигацию следом

                }
            })
        }

    });



    // PROJECTS PAGE

    $(document).on('click', '.page__projects .show-more__btn', function(){

        const url =  $('.next.page-numbers').attr('href');   //  URL, из которого будем брать элементы
        const targetContainer = $('.page__projects-items');          //  Контейнер, в котором хранятся элементы
        const paginationContainer = $('.page__pagination');    // Контейнер пагинации

        if (url !== undefined) {
            $.ajax({
                type: 'GET',
                url: url,
                dataType: 'html',
                success: function(data){

                    $('.page__pagination-wrapper').remove(); //  Удаляем старую навигацию

                    const elements = $(data).find('.page__projects-item');  //  Ищем элементы
                    const pagination = $(data).find('.page__pagination-wrapper'); //  Ищем навигацию

                    targetContainer.append(elements);   //  Добавляем посты в конец контейнера
                    paginationContainer.append(pagination); //  Добавляем навигацию следом

                }
            })
        }

    });

    // PRODUCTS PAGE

    $(document).on('click', '.page__category .show-more__btn', function(){

        const url =  $('.next.page-numbers').attr('href');   //  URL, из которого будем брать элементы
        const targetContainer = $('.cat__main');          //  Контейнер, в котором хранятся элементы
        const paginationContainer = $('.page__pagination');    // Контейнер пагинации

        if (url !== undefined) {
            $.ajax({
                type: 'GET',
                url: url,
                dataType: 'html',
                success: function(data){

                    $('.page__pagination-wrapper').remove(); //  Удаляем старую навигацию

                    const elements = $(data).find('.cat__item');  //  Ищем элементы
                    const pagination = $(data).find('.page__pagination-wrapper'); //  Ищем навигацию

                    targetContainer.append(elements);   //  Добавляем посты в конец контейнера
                    paginationContainer.append(pagination); //  Добавляем навигацию следом

                }
            })
        }

    });


});
