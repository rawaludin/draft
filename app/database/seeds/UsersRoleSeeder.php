<?php
/**
 * Setup your role here
 */
class UsersRoleSeeder extends Seeder {

	public function run()
	{
                // clear tables
                DB::table('permission_role')->delete();
                DB::table('assigned_roles')->delete();
                DB::table('roles')->delete();
                DB::table('permissions')->delete();
                DB::table('users')->delete();

                // setup roles
                $adminRole = new Role;
                $adminRole->name = "Administrator";
                $adminRole->save();

                $operatorRole = new Role;
                $operatorRole->name = "Operator";
                $operatorRole->save();

                // setup permissions
                $manageUsers = new Permission;
                $manageUsers->name = 'manage_users';
                $manageUsers->display_name = "Manage Users";
                $manageUsers->save();

                // attach permissions to role
                $adminRole->perms()->sync( [$manageUsers->id] );

		// create sample users
		$adminUser = new User;
                $adminUser->username = $_ENV['ADMIN_USERNAME'];
                $adminUser->email    = $_ENV['ADMIN_MAIL'];
                $adminUser->password = $_ENV['ADMIN_PASSWORD'];
                $adminUser->password_confirmation = $_ENV['ADMIN_PASSWORD'];
                $adminUser->confirmed = 1;
                $adminUser->save();

                // attach role to user
                $adminUser->attachRole( $adminRole );

	}

}
