<?php

    namespace Database\Seeders;

    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;

    class AppointmentSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         */
        public function run () : void
        {


            // Appointed to Dr. Sunchhay Khoun
            DB ::table ( 'appointments' ) -> insert ( [
                'firstName' => 'Sunchhay' ,
                'lastName' => '6' ,
                'phoneNum' => '012345678' ,
                'email' => 'sunchhay1@test.com' ,
                'appointedDoctor' => 'Sunchhay Khoun' ,
                'status' => 'PENDING' ,
                'birthday' => fake () -> date () ,
                'appointmentDate' => fake () -> date () ,
                'message' => fake () -> text () ,
            ] );
            DB ::table ( 'appointments' ) -> insert ( [
                'firstName' => 'Sunchhay' ,
                'lastName' => '2' ,
                'phoneNum' => '012345678' ,
                'email' => 'sunchhay1@test.com' ,
                'appointedDoctor' => 'Sunchhay Khoun' ,
                'status' => 'PENDING' ,
                'birthday' => fake () -> date () ,
                'appointmentDate' => fake () -> date () ,
                'message' => fake () -> text () ,
            ] );
            //-- Appointed to Dr. Sunchhay Khoun

            // Appointed to Dr. Liza John
            DB ::table ( 'appointments' ) -> insert ( [
                'firstName' => 'Sunchhay' ,
                'lastName' => '7' ,
                'phoneNum' => '012345678' ,
                'email' => 'sunchhay1@test.com' ,
                'appointedDoctor' => 'Liza John' ,
                'status' => 'PENDING' ,
                'birthday' => fake () -> date () ,
                'appointmentDate' => fake () -> date () ,
                'message' => fake () -> text () ,
            ] );
            DB ::table ( 'appointments' ) -> insert ( [
                'firstName' => 'Sunchhay' ,
                'lastName' => '1' ,
                'phoneNum' => '012345678' ,
                'email' => 'sunchhay1@test.com' ,
                'appointedDoctor' => 'Liza John' ,
                'status' => 'PENDING' ,
                'birthday' => fake () -> date () ,
                'appointmentDate' => fake () -> date () ,
                'message' => fake () -> text () ,
            ] );
            //-- Appointed to Dr. Liza John

            // Appointed to Dr. Rethtihpong Em
            DB ::table ( 'appointments' ) -> insert ( [
                'lastName' => '8' ,
                'firstName' => 'Sunchhay' ,
                'phoneNum' => '012345678' ,
                'email' => 'sunchhay1@test.com' ,
                'appointedDoctor' => 'Rethtihpong Em' ,
                'status' => 'PENDING' ,
                'birthday' => fake () -> date () ,
                'appointmentDate' => fake () -> date () ,
                'message' => fake () -> text () ,
            ] );
            DB ::table ( 'appointments' ) -> insert ( [
                'firstName' => 'Sunchhay' ,
                'lastName' => '3' ,
                'phoneNum' => '012345678' ,
                'email' => 'sunchhay1@test.com' ,
                'appointedDoctor' => 'Rethtihpong Em' ,
                'status' => 'PENDING' ,
                'birthday' => fake () -> date () ,
                'appointmentDate' => fake () -> date () ,
                'message' => fake () -> text () ,
            ] );
            //-- Appointed to Dr. Rethtihpong Em

            //Appointed to Dr. Rattanakpanha Kong
            DB ::table ( 'appointments' ) -> insert ( [
                'lastName' => '9' ,
                'firstName' => 'Sunchhay' ,
                'phoneNum' => '012345678' ,
                'email' => 'sunchhay1@test.com' ,
                'appointedDoctor' => 'Rattanakpanha Kong' ,
                'status' => 'PENDING' ,
                'birthday' => fake () -> date () ,
                'appointmentDate' => fake () -> date () ,
                'message' => fake () -> text () ,
            ] );
            DB ::table ( 'appointments' ) -> insert ( [
                'firstName' => 'Sunchhay' ,
                'lastName' => '4' ,
                'phoneNum' => '012345678' ,
                'email' => 'sunchhay1@test.com' ,
                'appointedDoctor' => 'Rattanakpanha Kong' ,
                'status' => 'PENDING' ,
                'birthday' => fake () -> date () ,
                'appointmentDate' => fake () -> date () ,
                'message' => fake () -> text () ,
            ] );
            //-- Appointed to Dr. Rattanakpanha Kong

            // Appointed to Dr. Liza Chan
            DB ::table ( 'appointments' ) -> insert ( [
                'lastName' => '10' ,
                'firstName' => 'Sunchhay' ,
                'phoneNum' => '012345678' ,
                'email' => 'sunchhay1@test.com' ,
                'appointedDoctor' => 'Liza Chan' ,
                'status' => 'PENDING' ,
                'birthday' => fake () -> date () ,
                'appointmentDate' => fake () -> date () ,
                'message' => fake () -> text () ,
            ] );
            DB ::table ( 'appointments' ) -> insert ( [
                'firstName' => 'Sunchhay' ,
                'lastName' => '5' ,
                'phoneNum' => '012345678' ,
                'email' => 'sunchhay1@test.com' ,
                'appointedDoctor' => 'Liza Chan' ,
                'status' => 'PENDING' ,
                'birthday' => fake () -> date () ,
                'appointmentDate' => fake () -> date () ,
                'message' => fake () -> text () ,
            ] );
            //-- Appointed to Dr. Liza Chan

            // No appointed Doctor
            DB ::table ( 'appointments' ) -> insert ( [
                'lastName' => '11' ,
                'firstName' => 'Sunchhay' ,
                'phoneNum' => '012345678' ,
                'email' => 'sunchhay1@test.com' ,
                //				'appointedDoctor' => 'Liza Chan',
                'status' => 'PENDING' ,
                'birthday' => fake () -> date () ,
                'appointmentDate' => fake () -> date () ,
                'message' => fake () -> text () ,
            ] );
            DB ::table ( 'appointments' ) -> insert ( [
                'lastName' => '12' ,
                'firstName' => 'Sunchhay' ,
                'phoneNum' => '012345678' ,
                'email' => 'sunchhay1@test.com' ,
                //				'appointedDoctor' => 'Liza Chan',
                'status' => 'PENDING' ,
                'birthday' => fake () -> date () ,
                'appointmentDate' => fake () -> date () ,
                'message' => fake () -> text () ,
            ] );

            DB ::table ( 'appointments' ) -> insert ( [
                'lastName' => '13' ,
                'firstName' => 'Pong' ,
                'phoneNum' => '012345678' ,
                'email' => 'sunchhay1@test.com' ,
                //				'appointedDoctor' => 'Liza Chan',
                'status' => 'PENDING' ,
                'birthday' => fake () -> date () ,
                'appointmentDate' => fake () -> date () ,
                'message' => fake () -> text () ,
            ] );
            DB ::table ( 'appointments' ) -> insert ( [
                'lastName' => '14' ,
                'firstName' => 'Panha' ,
                'phoneNum' => '012345678' ,
                'email' => 'sunchhay1@test.com' ,
                //				'appointedDoctor' => 'Liza Chan',
                'status' => 'PENDING' ,
                'birthday' => fake () -> date () ,
                'appointmentDate' => fake () -> date () ,
                'message' => fake () -> text () ,
            ] );
            //-- No appointed Doctor
        }
    }
