<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FieldsSeeder extends Seeder
{

  public function run()
  {
    DB::table('dvs_fields')->insert([
      [
        'slice_instance_id' => 1,
        'type'              => 'text',
        'human_name'        => 'Title',
        'key'               => 'title',
        'json_value'        => '{"text":"<strong>New</strong> England Route"}',
        'created_at'        => date('Y-m-d H:i:s'),
        'updated_at'        => date('Y-m-d H:i:s'),
      ],
      [
        'slice_instance_id' => 2,
        'type'              => 'text',
        'human_name'        => 'Header',
        'key'               => 'header',
        'json_value'        => '{"text":"Welcome to the greatest cruise line ever."}',
        'created_at'        => date('Y-m-d H:i:s'),
        'updated_at'        => date('Y-m-d H:i:s'),
      ],
      [
        'slice_instance_id' => 2,
        'type'              => 'wysiwyg',
        'human_name'        => 'Paragraph',
        'key'               => 'paragraph',
        'json_value'        => '{"text":"<p>Devise Sea Cruises is a fantasy cruise line. No, really, it isn\'t real . This is just a demo site for the greatest CMS of all time: Devise . Take a look around and see how content management can be fast for users, easy on developers, and amazing for content managers . You can login by clicking the login button above .</p >"}',
        'created_at'        => date('Y-m-d H:i:s'),
        'updated_at'        => date('Y-m-d H:i:s'),
      ],
      [
        'slice_instance_id' => 2,
        'type'              => 'image',
        'human_name'        => 'Image',
        'key'               => 'image',
        'json_value'        => '{"url":"/imgs/placeholder-scenery-3.jpg","alt":"a test image"}',
        'created_at'        => date('Y-m-d H:i:s'),
        'updated_at'        => date('Y-m-d H:i:s'),
      ],
      [
        'slice_instance_id' => 3,
        'type'              => 'text',
        'human_name'        => 'Title',
        'key'               => 'title',
        'json_value'        => '{"text":"Unparallelled Amenaties"}',
        'created_at'        => date('Y-m-d H:i:s'),
        'updated_at'        => date('Y-m-d H:i:s'),
      ],
      // experience 1 instance 4
      [
        'slice_instance_id' => 4,
        'type'              => 'text',
        'human_name'        => 'Name',
        'key'               => 'name',
        'json_value'        => '{"text":"Destinations"}',
        'created_at'        => date('Y-m-d H:i:s'),
        'updated_at'        => date('Y-m-d H:i:s'),
      ],
      [
        'slice_instance_id' => 4,
        'type'              => 'text',
        'human_name'        => 'Title',
        'key'               => 'title',
        'json_value'        => '{"text":"Away we go"}',
        'created_at'        => date('Y-m-d H:i:s'),
        'updated_at'        => date('Y-m-d H:i:s'),
      ],
      [
        'slice_instance_id' => 4,
        'type'              => 'text',
        'human_name'        => 'Description',
        'key'               => 'description',
        'json_value'        => '{"text":"We offer the most incredible destinations. You will never want to come home."}',
        'created_at'        => date('Y-m-d H:i:s'),
        'updated_at'        => date('Y-m-d H:i:s'),
      ],
      [
        'slice_instance_id' => 4,
        'type'              => 'text',
        'human_name'        => 'Long Description',
        'key'               => 'longDescription',
        'json_value'        => '{"text":"Bacon ipsum dolor amet alcatra kielbasa salami brisket kevin, frankfurter picanha swine shank. Cow corned beef bacon spare ribs hamburger andouille tri-tip buffalo. Ribeye turducken kevin, biltong andouille jowl ham hock strip steak short ribs tri-tip fatback landjaeger. Kevin venison ham hock bresaola salami turkey."}',
        'created_at'        => date('Y-m-d H:i:s'),
        'updated_at'        => date('Y-m-d H:i:s'),
      ],
      [
        'slice_instance_id' => 4,
        'type'              => 'text',
        'human_name'        => 'HTML',
        'key'               => 'html',
        'json_value'        => '{"text":"todo"}',
        'created_at'        => date('Y-m-d H:i:s'),
        'updated_at'        => date('Y-m-d H:i:s'),
      ],
      // experience 2 instance 5
      [
        'slice_instance_id' => 5,
        'type'              => 'text',
        'human_name'        => 'Name',
        'key'               => 'name',
        'json_value'        => '{"text":"Shore Excursions"}',
        'created_at'        => date('Y-m-d H:i:s'),
        'updated_at'        => date('Y-m-d H:i:s'),
      ],
      [
        'slice_instance_id' => 5,
        'type'              => 'text',
        'human_name'        => 'Title',
        'key'               => 'title',
        'json_value'        => '{"text":"Welcome to the wild side"}',
        'created_at'        => date('Y-m-d H:i:s'),
        'updated_at'        => date('Y-m-d H:i:s'),
      ],
      [
        'slice_instance_id' => 5,
        'type'              => 'text',
        'human_name'        => 'Description',
        'key'               => 'description',
        'json_value'        => '{"text":"Devise Sea Cruises offer the most extreme excursions in the industry. You probably won\'t survive"}',
        'created_at'        => date('Y-m-d H:i:s'),
        'updated_at'        => date('Y-m-d H:i:s'),
      ],
      [
        'slice_instance_id' => 5,
        'type'              => 'text',
        'human_name'        => 'Long Description',
        'key'               => 'longDescription',
        'json_value'        => '{"text":"Bacon ipsum dolor amet alcatra kielbasa salami brisket kevin, frankfurter picanha swine shank. Cow corned beef bacon spare ribs hamburger andouille tri-tip buffalo. Ribeye turducken kevin, biltong andouille jowl ham hock strip steak short ribs tri-tip fatback landjaeger. Kevin venison ham hock bresaola salami turkey."}',
        'created_at'        => date('Y-m-d H:i:s'),
        'updated_at'        => date('Y-m-d H:i:s'),
      ],
      [
        'slice_instance_id' => 5,
        'type'              => 'text',
        'human_name'        => 'HTML',
        'key'               => 'html',
        'json_value'        => '{"text":"todo"}',
        'created_at'        => date('Y-m-d H:i:s'),
        'updated_at'        => date('Y-m-d H:i:s'),
      ],
      // experience 3 instance 6
      [
        'slice_instance_id' => 6,
        'type'              => 'text',
        'human_name'        => 'Name',
        'key'               => 'name',
        'json_value'        => '{"text":"Our Ships"}',
        'created_at'        => date('Y-m-d H:i:s'),
        'updated_at'        => date('Y-m-d H:i:s'),
      ],
      [
        'slice_instance_id' => 6,
        'type'              => 'text',
        'human_name'        => 'Title',
        'key'               => 'title',
        'json_value'        => '{"text":"Opulance. We has it."}',
        'created_at'        => date('Y-m-d H:i:s'),
        'updated_at'        => date('Y-m-d H:i:s'),
      ],
      [
        'slice_instance_id' => 6,
        'type'              => 'text',
        'human_name'        => 'Description',
        'key'               => 'description',
        'json_value'        => '{"text":"Devise Sea Cruises offer the most extreme excursions in the industry. You probably won\'t survive"}',
        'created_at'        => date('Y-m-d H:i:s'),
        'updated_at'        => date('Y-m-d H:i:s'),
      ],
      [
        'slice_instance_id' => 6,
        'type'              => 'text',
        'human_name'        => 'Long Description',
        'key'               => 'longDescription',
        'json_value'        => '{"text":"Bacon ipsum dolor amet alcatra kielbasa salami brisket kevin, frankfurter picanha swine shank. Cow corned beef bacon spare ribs hamburger andouille tri-tip buffalo. Ribeye turducken kevin, biltong andouille jowl ham hock strip steak short ribs tri-tip fatback landjaeger. Kevin venison ham hock bresaola salami turkey."}',
        'created_at'        => date('Y-m-d H:i:s'),
        'updated_at'        => date('Y-m-d H:i:s'),
      ],
      [
        'slice_instance_id' => 6,
        'type'              => 'text',
        'human_name'        => 'HTML',
        'key'               => 'html',
        'json_value'        => '{"text":"todo"}',
        'created_at'        => date('Y-m-d H:i:s'),
        'updated_at'        => date('Y-m-d H:i:s'),
      ],
      // experience 4 instance 7
      [
        'slice_instance_id' => 7,
        'type'              => 'text',
        'human_name'        => 'Name',
        'key'               => 'name',
        'json_value'        => '{"text":"Things to Do"}',
        'created_at'        => date('Y-m-d H:i:s'),
        'updated_at'        => date('Y-m-d H:i:s'),
      ],
      [
        'slice_instance_id' => 7,
        'type'              => 'text',
        'human_name'        => 'Title',
        'key'               => 'title',
        'json_value'        => '{"text":"&quot;Boardum&quot; isn\'t in our vocabulary"}',
        'created_at'        => date('Y-m-d H:i:s'),
        'updated_at'        => date('Y-m-d H:i:s'),
      ],
      [
        'slice_instance_id' => 7,
        'type'              => 'text',
        'human_name'        => 'Description',
        'key'               => 'description',
        'json_value'        => '{"text":"We offer the most incredible destinations. You will never want to come home."}',
        'created_at'        => date('Y-m-d H:i:s'),
        'updated_at'        => date('Y-m-d H:i:s'),
      ],
      [
        'slice_instance_id' => 7,
        'type'              => 'text',
        'human_name'        => 'Long Description',
        'key'               => 'longDescription',
        'json_value'        => '{"text":"Bacon ipsum dolor amet alcatra kielbasa salami brisket kevin, frankfurter picanha swine shank. Cow corned beef bacon spare ribs hamburger andouille tri-tip buffalo. Ribeye turducken kevin, biltong andouille jowl ham hock strip steak short ribs tri-tip fatback landjaeger. Kevin venison ham hock bresaola salami turkey."}',
        'created_at'        => date('Y-m-d H:i:s'),
        'updated_at'        => date('Y-m-d H:i:s'),
      ],
      [
        'slice_instance_id' => 7,
        'type'              => 'text',
        'human_name'        => 'HTML',
        'key'               => 'html',
        'json_value'        => '{"text":"todo"}',
        'created_at'        => date('Y-m-d H:i:s'),
        'updated_at'        => date('Y-m-d H:i:s'),
      ],
      // experience 5 instance 8
      [
        'slice_instance_id' => 8,
        'type'              => 'text',
        'human_name'        => 'Name',
        'key'               => 'name',
        'json_value'        => '{"text":"Dining"}',
        'created_at'        => date('Y-m-d H:i:s'),
        'updated_at'        => date('Y-m-d H:i:s'),
      ],
      [
        'slice_instance_id' => 8,
        'type'              => 'text',
        'human_name'        => 'Title',
        'key'               => 'title',
        'json_value'        => '{"text":"Eat your way to paradise"}',
        'created_at'        => date('Y-m-d H:i:s'),
        'updated_at'        => date('Y-m-d H:i:s'),
      ],
      [
        'slice_instance_id' => 8,
        'type'              => 'text',
        'human_name'        => 'Description',
        'key'               => 'description',
        'json_value'        => '{"text":"Our executive chefs prepare fresh, organic, gluten-free meals daily."}',
        'created_at'        => date('Y-m-d H:i:s'),
        'updated_at'        => date('Y-m-d H:i:s'),
      ],
      [
        'slice_instance_id' => 8,
        'type'              => 'text',
        'human_name'        => 'Long Description',
        'key'               => 'longDescription',
        'json_value'        => '{"text":"Bacon ipsum dolor amet alcatra kielbasa salami brisket kevin, frankfurter picanha swine shank. Cow corned beef bacon spare ribs hamburger andouille tri-tip buffalo. Ribeye turducken kevin, biltong andouille jowl ham hock strip steak short ribs tri-tip fatback landjaeger. Kevin venison ham hock bresaola salami turkey."}',
        'created_at'        => date('Y-m-d H:i:s'),
        'updated_at'        => date('Y-m-d H:i:s'),
      ],
      [
        'slice_instance_id' => 8,
        'type'              => 'text',
        'human_name'        => 'HTML',
        'key'               => 'html',
        'json_value'        => '{"text":"todo"}',
        'created_at'        => date('Y-m-d H:i:s'),
        'updated_at'        => date('Y-m-d H:i:s'),
      ],
      // experience 6 instance 9
      [
        'slice_instance_id' => 9,
        'type'              => 'text',
        'human_name'        => 'Name',
        'key'               => 'name',
        'json_value'        => '{"text":"Packages"}',
        'created_at'        => date('Y-m-d H:i:s'),
        'updated_at'        => date('Y-m-d H:i:s'),
      ],
      [
        'slice_instance_id' => 9,
        'type'              => 'text',
        'human_name'        => 'Title',
        'key'               => 'title',
        'json_value'        => '{"text":"Deals for families and couples"}',
        'created_at'        => date('Y-m-d H:i:s'),
        'updated_at'        => date('Y-m-d H:i:s'),
      ],
      [
        'slice_instance_id' => 9,
        'type'              => 'text',
        'human_name'        => 'Description',
        'key'               => 'description',
        'json_value'        => '{"text":"Family and Getaway Packages provide value without a cost. Wait... what?"}',
        'created_at'        => date('Y-m-d H:i:s'),
        'updated_at'        => date('Y-m-d H:i:s'),
      ],
      [
        'slice_instance_id' => 9,
        'type'              => 'text',
        'human_name'        => 'Long Description',
        'key'               => 'longDescription',
        'json_value'        => '{"text":"Bacon ipsum dolor amet alcatra kielbasa salami brisket kevin, frankfurter picanha swine shank. Cow corned beef bacon spare ribs hamburger andouille tri-tip buffalo. Ribeye turducken kevin, biltong andouille jowl ham hock strip steak short ribs tri-tip fatback landjaeger. Kevin venison ham hock bresaola salami turkey."}',
        'created_at'        => date('Y-m-d H:i:s'),
        'updated_at'        => date('Y-m-d H:i:s'),
      ],
      [
        'slice_instance_id' => 9,
        'type'              => 'text',
        'human_name'        => 'HTML',
        'key'               => 'html',
        'json_value'        => '{"text":"todo"}',
        'created_at'        => date('Y-m-d H:i:s'),
        'updated_at'        => date('Y-m-d H:i:s'),
      ],
    ]);
  }

}
