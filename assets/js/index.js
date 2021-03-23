let file=window.location.pathname;
let filename=file.substring(file.indexOf('/admin') + 7);

if(filename=='index.html'){
     document.getElementById('comments').style.color='#fff';
     document.getElementById('msg-view').style.backgroundColor="#ffb200";
     
    
}
if(filename=='agent.html'){
    document.getElementById('user').style.color='#fff';
    document.getElementById('agent').style.backgroundColor="#ffb200"
    
}
if(filename=='agent-add.html'){
    document.getElementById('user-plus').style.color='#fff';
    document.getElementById('agent-add').style.backgroundColor="#ffb200"
}