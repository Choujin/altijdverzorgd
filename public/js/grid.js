var container = document.querySelector('[data-ref="container"]');
var inputSearch = document.querySelector('[data-ref="input-search"]');
var keyupTimeout;
var mixer = mixitup(container, {
    animation: {
        duration: 350
//        effects: 'fade translateY(600%) stagger(35ms)',
//        easing: 'cubic-bezier(0.86, 0, 0.07, 1)',
//        reverseOut: true
    },
    selectors: {
        target: '.card',
        control: '.control'
    },
    controls:{
        live: true
    },
    classNames: {
        block: '',
        elementFilter: '',
        elementSort: ''
    },
//    load:{
//      sort: 'random'
//    },
    callbacks: {
        onMixClick: function () {
            // Reset the search if a filter is clicked

            if (this.matches('[data-filter]')) {
                inputSearch.value = '';
            }
        },
        onMixStart: function (state) {
            $('.itemCount').html('<i class="fa fa-cog fa-spin"></i>');

            // Show active filters
            //var filter = $('.search_type.filter');
        },
        onMixBusy: function () {
            $('.itemCount').html('<i class="fa fa-cog fa-spin"></i>');
        },
        onMixEnd: function (state) {
            $('.itemCount').html(state.totalShow);
        }
    }
});
$('.itemCount').html(mixer.getState().totalShow); // all *
// Set up a handler to listen for "keyup" events from the search input

inputSearch.addEventListener('keyup', function () {
    var searchValue;
    if (inputSearch.value.length < 2) {
        // If the input value is less than 3 characters, don't send

        searchValue = '';
    } else {
        searchValue = inputSearch.value.toLowerCase().trim();
    }

    // Very basic throttling to prevent mixer thrashing. Only search
    // once 350ms has passed since the last keyup event

    clearTimeout(keyupTimeout);
    keyupTimeout = setTimeout(function () {
        filterByString(searchValue);
    }, 350);
    console.log(state.totalShow);
});
/**
 * Filters the mixer using a provided search string, which is matched against
 * the contents of each target's "class" attribute. Any custom data-attribute(s)
 * could also be used.
 *
 * @param  {string} searchValue
 * @return {void}
 */

function filterByString(searchValue) {
    if (searchValue) {
        // Use an attribute wildcard selector to check for matches

        mixer.filter('[class*="' + searchValue + '"]');
    } else {
        // If no searchValue, treat as filter('all')

        mixer.filter('all');
    }
}
$('.reset-button').on( "click", function() {
  mixer.filter('all');
  mixer.sort('default:asc');
  $('.quicksearch').val('');
});
