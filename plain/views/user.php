User Data - <a href="/">Home</a><br/><br/>
<h1>Welcome</h1>
<table>
    <tr>
        <td>Username</td><td> : </td><td><?= $user->getUsername() ?></td>
    </tr>
    <tr>
        <td>Photo</td><td> : </td><td><img src="<?= $user->getPhotoPath() ?>" alt="User photo" style="border: 4mm ridge rgba(120, 81, 169, .6);;width:100px;height:100px;"></td>
    </tr>
</table>