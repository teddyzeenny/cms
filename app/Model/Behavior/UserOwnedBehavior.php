<?php
class UserOwnedBehavior extends ModelBehavior {
    
    public function beforeSave($Model) {
        if (!isset($Model->data[$Model->alias]['id'])) {
            if (AuthComponent::user() && !isset($Model->data[$Model->alias]['user_id'])) {
                $Model->data[$Model->alias]['user_id'] = AuthComponent::user('id');
            }
        }
    }
    
    public function unixToMysqlDateTime($Model, $unixDate) {
        return date('Y-m-d h:i:s', $unixDate);
    }

}
