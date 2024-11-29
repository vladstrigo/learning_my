let password = 'qaz';
if(password.length >= 4 && password.includes('-' && '_') ) {
    console.log('пароль надежный');
}
else {
    console.log('пароль ненадежный');
}
