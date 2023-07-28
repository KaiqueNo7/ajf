$(document).ready(function() {
    $('.money').maskMoney({
	    prefix: 'R$ ',
	    groupSeparator: '.',
	    radixPoint: ',',
	    autoGroup: true,
	    digits: 2,
	    rightAlign: false,
	    unmaskAsNumber: true
	});
});