<?php

class PropertyManager extends DBManager {


//----------------------------------------------------------------------
//----------------------------------------------------------------------   

    public function addProperty(Property $property) {
        
        try {
            
            $query = $this->db->prepare(
                
                "INSERT INTO property (
                
                    user_id, property_category, property_type, property_name, street, city, 
                    province_state, country, zip_code, secondary_addresses, location, 
                    region, manager_id, land_breadth, land_length, land_square_footage, 
                    number_of_floors, number_of_units, property_image, image1, image2, image3, 
                    image4, image5, length, breadth, height, depth, building_square_footage, 
                    current_property_value, asking_price, land_valuation, date_of_construction, 
                    foundation_material, framing_material, roofing_material, exterior_material, 
                    flooring_material, type_of_heating, last_renovation_date,
                    property_certification, common_areas, facilities, amenities,
                    accessibility, security_system, access_control_system, parking_spots,
                    free_parking_status, parking_hourly_rate, parking_monthly_rate, 
                    visitor_permitted_status, renovation_approval_status, use_of_member_cards,
                    member_card_fee, animal_permitted_status, fee_per_animal, 
                    features_selection_list, building_certification, type_of_rent, rent, 
                    rate_per_square_foot, lease_date, demolition_budget_capex, 
                    extension_budget_capex, reconstruct_budget_capex, 
                    maintenance_budget_capex, equip_replace_budget_capex, 
                    admin_fees_opex, school_tax_opex, municipal_tax_opex, water_tax_opex, 
                    energy_costs_opex, equip_rental_budget_opex, maintenance_fees_opex, 
                    institutional_status, government_owned_status, status
                ) 
                
                VALUES (
                    :user_id, :property_category, :property_type, :property_name, :street, 
                    :city, :province_state, :country, :zip_code, :secondary_addresses, 
                    :location, :region, :manager_id, :land_breadth, :land_length, 
                    :land_square_footage, :number_of_floors, :number_of_units, 
                    :property_image, :image1, :image2, :image3, :image4, :image5, :length, 
                    :breadth, :height, :depth, :building_square_footage, 
                    :current_property_value, :asking_price, :land_valuation, 
                    :date_of_construction, :foundation_material, :framing_material, 
                    :roofing_material, :exterior_material, :flooring_material, 
                    :type_of_heating, :last_renovation_date, :property_certification, 
                    :common_areas, :facilities, :amenities, :accessibility, :security_system, 
                    :access_control_system, :parking_spots, :free_parking_status, 
                    :parking_hourly_rate, :parking_monthly_rate, :visitor_permitted_status, 
                    :renovation_approval_status, :use_of_member_cards, :member_card_fee, 
                    :animal_permitted_status, :fee_per_animal, :features_selection_list, 
                    :building_certification, :type_of_rent, :rent, :rate_per_square_foot, 
                    :lease_date, :demolition_budget_capex, :extension_budget_capex, 
                    :reconstruct_budget_capex, :maintenance_budget_capex, 
                    :equip_replace_budget_capex, :admin_fees_opex, :school_tax_opex, 
                    :municipal_tax_opex, :water_tax_opex, :energy_costs_opex, 
                    :equip_rental_budget_opex, :maintenance_fees_opex, 
                    :institutional_status, :government_owned_status, :status
                );"
            );
    

    $result = $query->execute( array(
                
        'user_id' => $property->getUserID(),
        'property_category' =>$property->getPropertyCategory(),
        'property_type' => $property->getPropertyType(),
        'property_name' => $property->getPropertyName(),
        'street' => $property->getStreet(),
        'city' => $property->getCity(),
        'province_state' => $property->getProvinceState(),
        'country' => $property->getCountry(),
        'zip_code' => $property->getZipCode(),
        'secondary_addresses' => $property->getSecondaryAddresses(),

        'location' => $property->getLocation(),
        'region' => $property->getRegion(),
        'manager_id' => $property->getManagerId(),
        'land_breadth' => $property->getLandBreadth(),
        'land_length' => $property->getLandLength(),
        'land_square_footage' => $property->getLandSquareFootage(),

        'number_of_floors' => $property->getNumberOfFloors(),
        'number_of_units' => $property->getNumberOfUnits(),
        'property_image' => $property->getPropertyImage(),
        'image1' => $property->getImage1(),
        'image2' => $property->getImage2(),
        'image3' => $property->getImage3(),
        'image4' => $property->getImage4(),
        'image5' => $property->getImage5(),
        'length' => ($property->getLength() !== null) ? (int)$property->getLength() : null,
        'breadth' => ($property->getBreadth() !== null) ? (int)$property->getBreadth() : null,
        'height' => $property->getHeight(),
        'depth' => $property->getDepth(),
        'building_square_footage' => $property->getBuildingSquareFootage(),

        'current_property_value' => $property->getCurrentPropertyValue(),
        'asking_price' => $property->getAskingPrice(),
        'land_valuation' => $property->getLandValuation(),

        'date_of_construction' => $property->getDateOfConstruction(),
        'foundation_material' => $property->getFoundationMaterial(),
        'framing_material' => $property->getFramingMaterial(),
        'roofing_material' => $property->getRoofingMaterial(),
        'exterior_material' => $property->getExteriorMaterial(),
        'flooring_material' => $property->getFlooringMaterial(),
        'type_of_heating' => $property->getTypeOfHeating(),

        'last_renovation_date' => $property->getLastRenovationDate(),
        'property_certification' => $property->getPropertyCertification(),
        'common_areas' => $property->getCommonAreas(),
        'facilities' => $property->getFacilities(),
        'amenities' => $property->getAmenities(),
        'accessibility' => $property->getAccessibility(),
        'security_system' => $property->getSecuritySystem(),
        'access_control_system' => $property->getAccessControlSystem(),

        'parking_spots' => $property->getParkingSpots(),
        'free_parking_status' => $property->getFreeParkingStatus(),
        'parking_hourly_rate' => $property->getParkingHourlyRate(),
        'parking_monthly_rate' => $property->getParkingMonthlyRate(),

        'visitor_permitted_status' => $property->getVisitorPermittedStatus(),
        'renovation_approval_status' => $property->getRenovationApprovalStatus(),
        'use_of_member_cards' => $property->getUseOfMemberCards(),
        'member_card_fee' => $property->getMemberCardFee(),
        'animal_permitted_status' => $property->getAnimalPermittedStatus(),
        'fee_per_animal' => $property->getFeePerAnimal(),

        'features_selection_list' => $property->getFeaturesSelectionList(),
        'building_certification' => $property->getBuildingCertification(),
        'type_of_rent' => $property->getTypeOfRent(),
        'rent' => $property->getRent(),
        'rate_per_square_foot' => $property->getRatePerSquareFoot(),
        'lease_date' => $property->getLeaseDate(),

        'demolition_budget_capex' => $property->getDemolitionBudgetCapex(),
        'extension_budget_capex' => $property->getExtensionBudgetCapex(),
        'reconstruct_budget_capex' => $property->getReconstructBudgetCapex(),
        'maintenance_budget_capex' => $property->getMaintenanceBudgetCapex(),
        'equip_replace_budget_capex' => $property->getEquipReplaceBudgetCapex(),

        'admin_fees_opex' => $property->getAdminFeesOpex(),
        'school_tax_opex' => $property->getSchoolTaxOpex(),
        'municipal_tax_opex' => $property->getMunicipalTaxOpex(),
        'water_tax_opex' => $property->getWaterTaxOpex(),
        'energy_costs_opex' => $property->getEnergyCostsOpex(),
        'equip_rental_budget_opex' => $property->getEquipRentalBudgetOpex(),
        'maintenance_fees_opex' => $property->getMaintenanceFeesOpex(),

        'institutional_status' => $property->getInstitutionalStatus(),
        'government_owned_status' => $property->getGovernmentOwnedStatus(),

        'status' => $property->getStatus(),              
    ));
    

            if ($result) {
                return true;
            } else {
                throw new Exception('Failed to execute query.');
            }
        } catch (PDOException $e) {
            // This will catch any PDO exceptions (database errors)
            error_log('Database error: ' . $e->getMessage());
            return false;
        } catch (Exception $e) {
            // This will catch any general exceptions
            error_log('General error: ' . $e->getMessage());
            return false;
        }
    }
    

//----------------------------------------------------------------------
//----------------------------------------------------------------------


    public function editProperty(Property $property) {
    $query = $this->db->prepare(
        "UPDATE `property` SET
        propertyCategory = :propertyCategory,propertyType = :propertyType, propertyName = :propertyName,
        street = :street,city = :city, provinceState = :provinceState, zipCode = :zipCode,
        country = :country,  address = :address,
        numberOfFloors = :numberOfFloors, numberOfUnits = :numberOfUnits,
        length = :length, breadth = :breadth, height = :height, depth = :depth, totalSquareFeet = :totalSquareFeet,
        currentValue = :currentValue, dateOfConstruction = :dateOfConstruction,
        buildingMaterialStructure = :buildingMaterialStructure,
        lastRenovationDate = :lastRenovationDate,
        commonAreas = :commonAreas, facilities = :facilities, amenities = :amenities,
        accessibility = :accessibility, securitySystem = :securitySystem,
        accessControlSystem = :accessControlSystem, parkingSpots = :parkingSpots,
        parkingFee = :parkingFee, parkingAmount = :parkingAmount,
        parkingAmountMonthly = :parkingAmountMonthly,
        building_name = :building_name, property_type = :property_type,
        location = :location, region = :region, manager_id = :manager_id,
        land_breadth = :land_breadth, land_length = :land_length,
        square_feet = :square_feet, features_selection_list = :features_selection_list,
        building_certification = :building_certification,
        type_of_rent = :type_of_rent, rent = :rent,
        rate_per_square_feet = :rate_per_square_feet,
        lease_date = :lease_date, status = :status WHERE `ID` = :id"
    );

    return $query->execute(array(
        'id' => $property->getId(),
        'propertyCategory' => $property->getPropertyCategory(),
        'propertyType' => $property->getPropertyType(),
        'propertyName' => $property->getPropertyName(),
        'street' => $property->getStreet(),
        'city' => $property->getCity(),
        'provinceState' => $property->getProvinceState(),
        'zipCode' => $property->getZipCode(),
        'country' => $property->getCountry(),
        'address' => $property->getAddress(),
        'numberOfFloors' => $property->getNumberOfFloors(),
        'numberOfUnits' => $property->getNumberOfUnits(),
        'length' => $property->getLength(),
        'breadth' => $property->getBreadth(),
        'height' => $property->getHeight(),
        'depth' => $property->getDepth(),
        'totalSquareFeet' => $property->getTotalSquareFeet(),
        'currentValue' => $property->getCurrentValue(),
        'dateOfConstruction' => $property->getDateOfConstruction(),
        'buildingMaterialStructure' => $property->getBuildingMaterialStructure(),
        'lastRenovationDate' => $property->getLastRenovationDate(),
        'commonAreas' => $property->getCommonAreas(),
        'facilities' => $property->getFacilities(),
        'amenities' => $property->getAmenities(),
        'accessibility' => $property->getAccessibility(),
        'securitySystem' => $property->getSecuritySystem(),
        'accessControlSystem' => $property->getAccessControlSystem(),
        'parkingSpots' => $property->getParkingSpots(),
        'parkingFee' => $property->getParkingFee(),
        'parkingAmount' => $property->getParkingAmount(),
        'parkingAmountMonthly' => $property->getParkingAmountMonthly(),
        'building_name' => $property->getBuildingName(),
        'property_type' => $property->getPropertyType(),
        'location' => $property->getLocation(),
        'region' => $property->getRegion(),
        'manager_id' => $property->getManagerId(),
        'land_breadth' => $property->getLandBreadth(),
        'land_length' => $property->getLandLength(),
        'square_feet' => $property->getSquareFeet(),
        'features_selection_list' => $property->getFeaturesSelectionList(),
        'building_certification' => $property->getBuildingCertification(),
        'type_of_rent' => $property->getTypeOfRent(),
        'rent' => $property->getRent(),
        'rate_per_square_feet' => $property->getRatePerSquareFeet(),
        'lease_date' => $property->getLeaseDate(),
        'status' => $property->getStatus(),
    ));
}


//----------------------------------------------------------------------
//----------------------------------------------------------------------


public function deleteProperty($propertyId) {
    
    try {

        // Check if the propertyId exists in the database
        $checkQuery = $this->db->prepare("SELECT * FROM `property` WHERE `id` = :id");
        $checkQuery->execute(['id' => $propertyId]);
        $property = $checkQuery->fetch();

        
        // If the propertyId exists, update the status to 0 (Inactive/ Deleted)
        if ($property != null) {
            $updateQuery = $this->db->prepare("UPDATE `property` SET `status` = 0 WHERE `id` = :id");
            $isUpdated = $updateQuery->execute(['id' => $propertyId]);

            // Return TRUE if the update was successful, FALSE otherwise
            return $isUpdated;
        

        // If the propertyId does not exist, return FALSE
        }else {
            return FALSE;
        
        }

    } catch (PDOException $e) {
        // Handle the exception
        error_log("Database error: " . $e->getMessage());
        return FALSE;

    }

}

//----------------------------------------------------------------------
//----------------------------------------------------------------------


public function getAllProperties() {
    $properties_obj = array();

    try {
        $query = $this->db->query("SELECT * FROM property ORDER BY id ASC");
        $properties = $query->fetchAll(PDO::FETCH_ASSOC);

        if (!empty($properties)) {
            foreach ($properties as $property) {
                // Check for null values in the property array and provide default values
                $property['id'] = $property['id'] ?? null;
                $property['user_id'] = $property['user_id'] ?? null;
                $property['property_category'] = $property['property_category'] ?? null;
                $property['property_type'] = $property['property_type'] ?? null;
                $property['property_name'] = $property['property_name'] ?? null;
                $property['street'] = $property['street'] ?? null;
                $property['sub_division_borough'] = $property['sub_division_borough'] ?? null;
                $property['city'] = $property['city'] ?? null;
                $property['region'] = $property['region'] ?? null;
                $property['province_state'] = $property['province_state'] ?? null;
                $property['country'] = $property['country'] ?? null;
                $property['zip_code'] = $property['zip_code'] ?? null;
                $property['secondary_addresses'] = $property['secondary_addresses'] ?? null;
                $property['manager_id'] = $property['manager_id'] ?? null;
                $property['land_breadth'] = $property['land_breadth'] ?? null;
                $property['land_length'] = $property['land_length'] ?? null;
                $property['land_square_footage'] = $property['land_square_footage'] ?? null;
                $property['number_of_floors'] = $property['number_of_floors'] ?? null;
                $property['number_of_units'] = $property['number_of_units'] ?? null;
                $property['property_image'] = $property['property_image'] ?? null;
                $property['image1'] = $property['image1'] ?? null;
                $property['image2'] = $property['image2'] ?? null;
                $property['image3'] = $property['image3'] ?? null;
                $property['image4'] = $property['image4'] ?? null;
                $property['image5'] = $property['image5'] ?? null;
                $property['length'] = $property['length'] ?? null;
                $property['breadth'] = $property['breadth'] ?? null;
                $property['height'] = $property['height'] ?? null;
                $property['depth'] = $property['depth'] ?? null;
                $property['building_square_footage'] = $property['building_square_footage'] ?? null;
                $property['current_property_value'] = $property['current_property_value'] ?? null;
                $property['asking_price'] = $property['asking_price'] ?? null;
                $property['land_valuation'] = $property['land_valuation'] ?? null;
                $property['date_of_construction'] = $property['date_of_construction'] ?? null;
                $property['foundation_material'] = $property['foundation_material'] ?? null;
                $property['framing_material'] = $property['framing_material'] ?? null;
                $property['roofing_material'] = $property['roofing_material'] ?? null;
                $property['exterior_material'] = $property['exterior_material'] ?? null;
                $property['flooring_material'] = $property['flooring_material'] ?? null;
                $property['type_of_heating'] = $property['type_of_heating'] ?? null;
                $property['last_renovation_date'] = $property['last_renovation_date'] ?? null;
                $property['property_certification'] = $property['property_certification'] ?? null;
                $property['common_areas'] = $property['common_areas'] ?? null;
                $property['facilities'] = $property['facilities'] ?? null;
                $property['amenities'] = $property['amenities'] ?? null;
                $property['accessibility'] = $property['accessibility'] ?? null;
                $property['security_system'] = $property['security_system'] ?? null;
                $property['access_control_system'] = $property['access_control_system'] ?? null;
                $property['reserved_parking_spots'] = $property['reserved_parking_spots'] ?? null;
                $property['visitor_parking_spots'] = $property['visitor_parking_spots'] ?? null;
                $property['parking_hourly_rate'] = $property['parking_hourly_rate'] ?? null;
                $property['parking_monthly_rate'] = $property['parking_monthly_rate'] ?? null;
                $property['visitor_permitted_status'] = $property['visitor_permitted_status'] ?? null;
                $property['renovation_approval_status'] = $property['renovation_approval_status'] ?? null;
                $property['use_of_member_cards'] = $property['use_of_member_cards'] ?? null;
                $property['member_card_fee'] = $property['member_card_fee'] ?? null;
                $property['animal_permitted_status'] = $property['animal_permitted_status'] ?? null;
                $property['fee_per_animal'] = $property['fee_per_animal'] ?? null;
                $property['feature_selection_list'] = $property['feature_selection_list'] ?? null;
                $property['building_certification'] = $property['building_certification'] ?? null;
                $property['type_of_rent'] = $property['type_of_rent'] ?? null;
                $property['rent'] = $property['rent'] ?? null;
                $property['rate_per_square_foot'] = $property['rate_per_square_foot'] ?? null;
                $property['lease_date'] = $property['lease_date'] ?? null;
                $property['renewal_frequency'] = $property['renewal_frequency'] ?? null;
                $property['demolition_budget_cap_ex'] = $property['demolition_budget_cap_ex'] ?? null;
                $property['extension_budget_cap_ex'] = $property['extension_budget_cap_ex'] ?? null;
                $property['reconstruct_budget_cap_ex'] = $property['reconstruct_budget_cap_ex'] ?? null;
                $property['maintenance_budget_cap_ex'] = $property['maintenance_budget_cap_ex'] ?? null;
                $property['equip_replace_cap_ex'] = $property['equip_replace_cap_ex'] ?? null;
                $property['admin_fees_op_ex'] = $property['admin_fees_op_ex'] ?? null;
                $property['school_tax_op_ex'] = $property['school_tax_op_ex'] ?? null;
                $property['municipal_tax_op_ex'] = $property['municipal_tax_op_ex'] ?? null;
                $property['water_tax_op_ex'] = $property['water_tax_op_ex'] ?? null;
                $property['energy_costs_op_ex'] = $property['energy_costs_op_ex'] ?? null;
                $property['equip_rental_budget_op_ex'] = $property['equip_rental_budget_op_ex'] ?? null;
                $property['maintenance_fees_op_ex'] = $property['maintenance_fees_op_ex'] ?? null;
                $property['clicked_on'] = $property['clicked_on'] ?? null;
                $property['institutional_status'] = $property['institutional_status'] ?? null;
                $property['government_owned_status'] = $property['government_owned_status'] ?? null;
                $property['status'] = $property['status'] ?? null;

                // If no null values are found, create a new Property object
                $properties_obj[] = new Property($property);
            }

        } else {
            $properties_obj = [];
        }

    } catch (PDOException $e) {
        error_log("Database error: " . $e->getMessage());
        throw new Exception("There was a problem fetching properties from the database.");
   
    } catch (Exception $e) {
        error_log("Error: " . $e->getMessage());
        throw new Exception("There was a problem creating Property objects.");
   
    }

    return $properties_obj;
}


//----------------------------------------------------------------------
//----------------------------------------------------------------------

public function getSingleProperty( $id ) {
            $result = $this->db->prepare( "SELECT * FROM `property` WHERE `id` = :id;" );
            $result->execute(array(
                        ':id' => $id  
                        ));

            if($result->rowCount() > 0){

                $singleProperty = $result->fetch(PDO::FETCH_ASSOC);
                $oneProperty = new Property($singleProperty);
                return $oneProperty;

            }else{

                return false;
            }   
        }


//----------------------------------------------------------------------
//----------------------------------------------------------------------

public function getPropertiesOneUser(int $userId) {
            
            $comment_obj = array();
            $query       = $this->db->query( "SELECT * FROM `property` ORDER BY id ASC" );
            $properties    = $query->fetchAll( PDO::FETCH_ASSOC );

            foreach ( $properties as $property ) {
                
                $id = $property['user_id'];
                $dbMng = new DbManager();
                $propertyArr = $dbMng->getSingleProperty($id);


                $arr['user_id'] = $propertyArr->getUserID();
                $arr['property_category'] = $propertyArr->getPropertyCategory();
                $arr['property_type'] = $propertyArr->getPropertyType();
                $arr['property_name'] = $propertyArr->getPropertyName();
                $arr['street'] = $propertyArr->getStreet();
                $arr['sub_division_borough'] = $propertyArr->getSubDivisionBorough();
                $arr['city'] = $propertyArr->getCity();
                $arr['region'] = $propertyArr->getRegion();
                $arr['province_state'] = $propertyArr->getProvinceState();
                $arr['country'] = $propertyArr->getCountry();
                $arr['zip_code'] = $propertyArr->getZipCode();
                $arr['secondary_addresses'] = $propertyArr->getSecondaryAddresses();

                $arr['manager_id'] = $propertyArr->getManagerId();
                $arr['land_breadth'] = $propertyArr->getLandBreadth();
                $arr['land_length'] = $propertyArr->getLandLength();
                $arr['land_square_footage'] = $propertyArr->getLandSquareFootage();

                $arr['number_of_floors'] = $propertyArr->getNumberOfFloors();
                $arr['number_of_units'] = $propertyArr->getNumberOfUnits();
                $arr['property_image'] = $propertyArr->getPropertyImage();
                $arr['image1'] = $propertyArr->getImage1();
                $arr['image2'] = $propertyArr->getImage2();
                $arr['image3'] = $propertyArr->getImage3();
                $arr['image4'] = $propertyArr->getImage4();
                $arr['image5'] = $propertyArr->getImage5();
                $arr['length'] = ($propertyArr->getLength() !== null) ? (int)$propertyArr->getLength() : null;
                $arr['breadth'] = ($propertyArr->getBreadth() !== null) ? (int)$propertyArr->getBreadth() : null;
                $arr['height'] = $propertyArr->getHeight();
                $arr['depth'] = $propertyArr->getDepth();
                $arr['building_square_footage'] = $propertyArr->getBuildingSquareFootage();

                $arr['current_property_value'] = $propertyArr->getCurrentPropertyValue();
                $arr['asking_price'] = $propertyArr->getAskingPrice();
                $arr['land_valuation'] = $propertyArr->getLandValuation();

                $arr['date_of_construction'] = $propertyArr->getDateOfConstruction();
                $arr['foundation_material'] = $propertyArr->getFoundationMaterial();
                $arr['framing_material'] = $propertyArr->getFramingMaterial();
                $arr['roofing_material'] = $propertyArr->getRoofingMaterial();
                $arr['exterior_material'] = $propertyArr->getExteriorMaterial();
                $arr['flooring_material'] = $propertyArr->getFlooringMaterial();
                $arr['type_of_heating'] = $propertyArr->getTypeOfHeating();

                $arr['last_renovation_date'] = $propertyArr->getLastRenovationDate();
                $arr['property_certification'] = $propertyArr->getPropertyCertification();
                $arr['common_areas'] = $propertyArr->getCommonAreas();
                $arr['facilities'] = $propertyArr->getFacilities();
                $arr['amenities'] = $propertyArr->getAmenities();
                $arr['accessibility'] = $propertyArr->getAccessibility();
                $arr['security_system'] = $propertyArr->getSecuritySystem();
                $arr['access_control_system'] = $propertyArr->getAccessControlSystem();

                $arr['reserved_parking_spots'] = $propertyArr->getReservedParkingSpots();
                $arr['visitor_parking_spots'] = $propertyArr->getVisitorParkingSpots();
                $arr['parking_hourly_rate'] = $propertyArr->getParkingHourlyRate();
                $arr['parking_monthly_rate'] = $propertyArr->getParkingMonthlyRate();

                $arr['visitor_permitted_status'] = $propertyArr->getVisitorPermittedStatus();
                $arr['renovation_approval_status'] = $propertyArr->getRenovationApprovalStatus();
                $arr['use_of_member_cards'] = $propertyArr->getUseOfMemberCards();
                $arr['member_card_fee'] = $propertyArr->getMemberCardFee();
                $arr['animal_permitted_status'] = $propertyArr->getAnimalPermittedStatus();
                $arr['fee_per_animal'] = $propertyArr->getFeePerAnimal();

                $arr['features_selection_list'] = $propertyArr->getFeaturesSelectionList();
                $arr['building_certification'] = $propertyArr->getBuildingCertification();
                $arr['type_of_rent'] = $propertyArr->getTypeOfRent();
                $arr['rent'] = $propertyArr->getRent();
                $arr['rate_per_square_foot'] = $propertyArr->getRatePerSquareFoot();
                $arr['lease_date'] = $propertyArr->getLeaseDate();
                $arr['renewal_fequency'] = $propertyArr->getRenewalFrequency();

                $arr['demolition_budget_capex'] = $propertyArr->getDemolitionBudgetCapex();
                $arr['extension_budget_capex'] = $propertyArr->getExtensionBudgetCapex();
                $arr['reconstruct_budget_capex'] = $propertyArr->getReconstructBudgetCapex();
                $arr['maintenance_budget_capex'] = $propertyArr->getMaintenanceBudgetCapex();
                $arr['equip_replace_budget_capex'] = $propertyArr->getEquipReplaceBudgetCapex();

                $arr['admin_fees_opex'] = $propertyArr->getAdminFeesOpex();
                $arr['school_tax_opex'] = $propertyArr->getSchoolTaxOpex();
                $arr['municipal_tax_opex'] = $propertyArr->getMunicipalTaxOpex();
                $arr['water_tax_opex'] = $propertyArr->getWaterTaxOpex();
                $arr['energy_costs_opex'] = $propertyArr->getEnergyCostsOpex();
                $arr['equip_rental_budget_opex'] = $propertyArr->getEquipRentalBudgetOpex();
                $arr['maintenance_fees_opex'] = $propertyArr->getMaintenanceFeesOpex();

                 $arr['clicked_on'] = $propertyArr->getClickedOn();

                $arr['institutional_status'] = $propertyArr->getInstitutionalStatus();
                $arr['government_owned_status'] = $propertyArr->getGovernmentOwnedStatus();

                $arr['status'] = $propertyArr->getStatus();              

                
                if($id == $userId){
                
                    $property_obj[] = new Property( $arr );
                }
                
            }

            return $property_obj;
        }

//----------------------------------------------------------------------
//----------------------------------------------------------------------

public function propertyWasClicked($id) {
    
    try {

        $this->db->beginTransaction();

        $query = $this->db->prepare("UPDATE property SET clicked_on = 0;");
        $query->execute();

        // Check if the query was successful
        if ($query->rowCount() > 0) {

            $result = $this->db->prepare("UPDATE property SET clicked_on = 1 WHERE id = ?;");
            $result->bindParam(1, $id);
            $result->execute();

            // Check if the second query was successful
            if ($result->rowCount() > 0) {
                // Commit the transaction
                $this->db->commit();
                return true;

            } else {
              return false;
            }

        } else {
           return false;
        }

    }catch (PDOException $e) {
        // Rollback the transaction in case of an error
        $this->db->rollback();
        error_log("Error: " . $e->getMessage());
        return false;
    
    }

}

//----------------------------------------------------------------------
//----------------------------------------------------------------------



}

?>
