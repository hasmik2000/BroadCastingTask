Pusher.logToConsole = true;

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: 'c2e66bc35118b836eed8',
    cluster: 'app2',
    encrypted: true,
    logToConsole: true
});

// Echo.PrivateChannel('user.{{ $user_id }}')
//     .listen('MessageSent', (e) => {
//
// });
// Echo.private('user.{{ $user_id }}')
//     .listen('MessageSent', (e) => {
//     alert(e.message.message);
// });