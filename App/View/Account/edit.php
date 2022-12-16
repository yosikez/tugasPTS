<div class="form-out acc">
    <div class="form-wrap acc">
        <h1>Edit Profile</h1>
        <form action="<?= ForTech\App\Core\Router::url('auth/update-profile')?>" method="POST" class="form shadow" enctype="multipart/form-data">
            <div class="form-group">
                <label for="fullname">Fullname</label>
                <input type="text" name="fullname" value=<?= $data->fullname?>>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" value=<?= $data->username?>>
            </div>
            <div class="form-group">
                <label for="about">About</label>
                <textarea class="about" name="about" id="about" cols="10" rows="10" ><?= $data->about?></textarea>
            </div>
            <div class="form-group">
                <label for="avatar">Avatar</label>
                <input type="file" name="image" class="avatar" value=<?= $data->avatar?>>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" value=<?= $data->address?>>
            </div>
            <div class="form-group">
                <label for="job">Job</label>
                <input type="text" name="job" value=<?= $data->job?>>
            </div>
            <div class="form-group">
                <label for="organization">Organization</label>
                <input type="text" name="organization" value=<?= $data->organization?>>
            </div>
            <input type="submit" value="Edit Profile" class="shadow">
        
        </form>
    </div>
</div>