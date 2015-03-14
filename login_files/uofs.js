function casinit(){
        if(document.forms[0] != null && document.forms[0].elements[0] != null) {
                document.forms[0].elements[0].focus();
                document.forms[0].elements[0].select();
        }
}


function showTab(show,hide) {
        hideContent = document.getElementById(hide);
        hiddenContentLink = document.getElementById(hide+'-link');
        showContent = document.getElementById(show);
        visibleContentLink = document.getElementById(show+'-link');
        hideContent.style.display = 'none';
        hiddenContentLink.className = '';
        showContent.style.display = 'block';
        visibleContentLink.className = 'active';
        visibleContentLink.blur();
}

function add_placeholder (id, placeholder) {
	var el = document.getElementById(id);
	el.placeholder = placeholder;
	el.onfocus = function ()
	{
		if(this.value == this.placeholder)
		{
			this.value = '';
			el.style.cssText = '';
			if (id == 'pass') {
				el.setAttribute('type','password');
			}
		}
	};

	el.onblur = function ()
	{
		if(this.value.length == 0)
		{
			this.value = this.placeholder;
			el.style.cssText = 'color:#A9A9A9;';
			if (id == 'pass') {
				el.setAttribute('type','text');
			}
		}
	};

	el.onblur();
}

function hasPlaceholderSupport() {
	var test = document.createElement('input');
	return ('placeholder' in test);
}

function addPlaceholders() {
	if (hasPlaceholderSupport() == false) {
		add_placeholder('username','NSID (abc123)');
		add_placeholder('password','Password');
	}
}

function submitHandler() {
	this.username.value=this.username.value.toLowerCase();
}

// Add event listener to replace the body onload function
// to comply with our Content Security Policy
document.addEventListener('DOMContentLoaded', function () {
    if (document.forms[0] != null) {
	document.forms[0].addEventListener('submit', submitHandler);
    }
    casinit();
    addPlaceholders(); 
})
