/**
 * Created by micha on 2/14/2020.
 */

function tellme(text) {
    dndod.alert(text);
}
function notice(notice) {
    dndod.notice(notice);
}

function overallError(){
var overall=$.confirm({
    title: 'Encountered an error!',
    content: 'Something went downhill, this may be serious',
    type: 'red',
    typeAnimated: true
});
overall.open(); setTimeout(()=>{overall.close},2500)
}

function AjaxPasswordError(title){
    var Error=$.confirm({
        title: title,
        content:'url:text.txt',
        type: 'red',
        typeAnimated: true,
        buttons: {
            tryAgain: {
                text: 'Try again',
                btnClass: 'btn-red',
                action: function(){
                }
            },
            close: function () {
            }
        }

    });
    Error.open()
    setTimeout(()=>{Error.close()},3000)
}

function AjaxPasswordNotMatching(content){
var matching=$.confirm({
    title: 'glyphicon glyphicon-heart',
    content: content,
    type: 'red',
    typeAnimated: true,
    buttons: {

        close: function () {
        }
    }

});
matching.open()
setTimeout(()=>{matching.close()},3000)
}

function AjaxPasswordResetSuccess(title){
var success= $.confirm({
    title: title,
    content:'url:text.txt',
    type: 'green',
    closeIcon:true,
    closeIconClass: 'fa fa-close',
    typeAnimated: true,
    buttons: {

        close: function () {
        }
    }

});
success.open()
setTimeout(()=>{success.close()},3000)

}

function AjaxPasswordSuccess(){
var successChange= $.confirm({
    content: function () {
        var self = this;
        return $.ajax({
            url: 'bower.json',
            dataType: 'json',
            method: 'get'
        }).fail(function(){
            self.setContent('Password has been changed.');
        });
    }
});
successChange.open()
setTimeout(()=>{successChange.close()},3000)

}
function AjaxMtrNoError(title,content){

var MtrNo=$.confirm({
    title: title,
    content: content,
    closeIcon:true,
    closeIconClass: 'fa fa-close',
    type: 'red',
    typeAnimated: true,
    buttons: {

        close: function () {
        }
    }

});
MtrNo.open()
setTimeout(()=>{MtrNo.close()},3000)

}
/**End of login form and reset form error dialog*/

//js confirm alerts
function processing(content)
{
var progress =$.dialog({
    icon: 'fa fa-spinner fa-spin',
    title: 'Processing!',
    content: content,
    closeIcon:true,
    closeIconClass: 'fa fa-close',
    lazyOpen:true,
    cancelButton:false,
    type: 'green',
    typeAnimated: true

})
progress.open()
setTimeout(() => {
    progress.close();
},3000)

}
//Red error dialog customization
function redErrorDialog(title,content,text)
{
$.confirm({
    title: title,
    content:content,
    animationSpeed:200,
    icon:'fa fa-warning',
    type: 'red',
    width:'20%',
    //columnClass:'col-md-12',
    theme:'bootstrap',
    typeAnimated: true,
    buttons: {
        tryAgain: {
            text: text,
            btnClass: 'btn-warning',
            action: function(){
            }
        },
        close: function () {
        }
    }
});

}
//end of red error dialog customization
//call back errors
function callBack()
{
$.confirm({
    animationBounce:2.5,
    theme:'bootstrap',//light/dark/supervan/material
    columnClass:'com-md-4 col-md-offset-8 col-xs-4 col-xs-offset-8',
    containerFluid:'true',//this will add 'container-fluid' instead of 'container'
    draggable:true,
    dragWindow:0,//number of pixel distance
    closeIcon: function(){
        return false; // to prevent close the modal.
        // or
        return 'aRandomButton'; // set a button handler, 'aRandomButton' prevents close.
    },
    // or
    closeIcon: 'aRandomButton', // set a button handler
    buttons: {
        aRandomButton: function(){

            $.alert('A random button is called, and i prevent closing the modal');
            return false; // you shall not pass
        },
        close: function(){
        }
    }
});
}
//end of call back alert
function notify(title,content)
{
var notification =$.dialog({
    lazyOpen:true,
    cancelButton:false,
    icon:'fa fa-spinner fa-spin',
    type: 'blue',
    typeAnimated: true,
    title:title,
    //theme:'supervan',
    content:content

})
notification.open()
setTimeout(() => {
    notification.close();
},3000)

}

function loading(title,content)
{var notifySuccess =$.dialog({
lazyOpen:true,
cancelButton:false,
icon:'fa fa-success fa-spin',
type: 'green',
typeAnimated: true,
title:title,
content:content

})
notifySuccess.open()
setTimeout(() => {
    notifySuccess.close();
},3000)
}

//delete user function
function deletUser(title,content)
{
$.confirm({
    title: title,
    content:content,
    autoClose: 'cancelAction|8000',
    buttons: {
        deleteUser: {
            text: 'delete file',
            action: function () {
                $.alert('Deleted the file!');
            }
        },
        cancelAction: function () {
            $.alert('action is canceled');
        }
    }
});
}

//function logout

function logoutMyself(content)
{
$.confirm({
    title: 'Logout?',
    content: content,
    autoClose: 'logoutUser|10000',
    buttons: {
        logoutUser: {
            text: 'logout myself',
            action: function () {
                $.alert('The user was logged out');
            }
        },
        cancel: function () {
            $.alert('canceled');
        }
    }
});
}

//content callback
function contentCallBack()
{
$.confirm({
    content: function(){
        var self = this;
        self.setContent('Checking callback flow');
        return $.ajax({
            url: 'bower.json',
            dataType: 'json',
            method: 'get'
        }).done(function (response) {
            self.setContentAppend('<div>Done!</div>');
        }).fail(function(){
            self.setContentAppend('<div>Fail!</div>');
        }).always(function(){
            self.setContentAppend('<div>Always!</div>');
        });
    },
    contentLoaded: function(data, status, xhr){
        self.setContentAppend('<div>Content loaded!</div>');
    },
    onContentReady: function(){
        this.setContentAppend('<div>Content ready!</div>');
    }
});
}

//using contentLoaded callback
function contentLoadedCallback()
{
$.confirm({
    content: 'url:text.txt',
    contentLoaded: function(data, status, xhr){
        // data is already set in content
        this.setContentAppend('<br>Status: ' + status);
    }
});
}



//load  from a text
function PasswordResetSucces(title)
{
var PassSuccess= $.dialog({
    title: title,
    content: 'url:text.txt',
    onContentReady: function () {
        var self = this;
        this.setContentPrepend('<div class="text-success text-center">Congratulations</div>');
        setTimeout(function () {
            self.setContentAppend('<div class="text-success text-center">Password updated successfully</div>');
        }, 2000);
    },
    columnClass:'medium',
    draggable:true,
    dragWindowGap:0,
    theme:'material'
});
PassSuccess.open()
setTimeout(() => {
    PassSuccess.close();
},3000)
}

function PasswordResetError(title,content)
{
var PassError= $.dialog({
    title: title,
    content:content,
    draggable:true,
    dragWindowGap:0,
    animationSpeed:200,
    icon:'fa fa-warning',
    type: 'red',
    columnClass:'medium',
    //columnClass:'col-md-12',
    theme:'bootstrap',
    typeAnimated: true
});
PassError.open()
setTimeout(() => {
    PassError.close();
},3000)
}
//simple alert message
function alertMessage()
{
$.confirm({
    title: false,
    content: 'Imagine a very critical action here! <br> ' +
    'Please press <strong style="font-size: 20px;">Y</strong> to proceed.',
    buttons: {
        yes: {
            isHidden: true, // hide the button
            keys: ['y'],
            action: function () {
                $.alert('Critical action <strong>was performed</strong>.');
            }
        },
        no: {
            keys: ['N'],
            action: function () {
                $.alert('You clicked No.');
            }
        }
    }
});
}


