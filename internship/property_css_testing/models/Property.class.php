<?php
class Property
{
    private $id;
    private $userId;
    private $propertyCategory;
    private $propertyType;
    private $propertyName;
    private $street;
    private $subDivisionBorough;
    private $city;
    private $region;
    private $provinceState;
    private $country;
    private $zipCode;
    private $secondaryAddresses;
    private $managerId;
    private $landBreadth;
    private $landLength;
    private $landSquareFootage;
    private $numberOfFloors;
    private $numberOfUnits;
    private $propertyImage;
    private $image1;
    private $image2;
    private $image3;
    private $image4;
    private $image5;
    private $length;
    private $breadth;
    private $height;
    private $depth;
    private $buildingSquareFootage;
    private $currentPropertyValue;
    private $askingPrice;
    private $landValuation;
    private $dateOfConstruction;
    private $foundationMaterial;
    private $framingMaterial;
    private $roofingMaterial;
    private $exteriorMaterial;
    private $flooringMaterial;
    private $typeOfHeating;
    private $lastRenovationDate;
    private $propertyCertification;
    private $commonAreas;
    private $facilities;
    private $amenities;
    private $accessibility;
    private $securitySystem;
    private $accessControlSystem;
    private $reservedParkingSpots;
    private $visitorParkingSpots;
    private $parkingHourlyRate;
    private $parkingMonthlyRate;
    private $visitorPermittedStatus;
    private $renovationApprovalStatus;
    private $useOfMemberCards;
    private $memberCardFee;
    private $animalPermittedStatus;
    private $feePerAnimal;
    private $featureSelectionList;
    private $buildingCertification;
    private $typeOfRent;
    private $rent;
    private $ratePerSquareFoot;
    private $leaseDate;
    private $renewalFrequency;
    private $demolitionBudgetCapEx;
    private $extensionBudgetCapEx;
    private $reconstructBudgetCapEx;
    private $maintenanceBudgetCapEx;
    private $equipReplaceCapEx;
    private $adminFeesOpEx;
    private $schoolTaxOpEx;
    private $municipalTaxOpEx;
    private $waterTaxOpEx;
    private $energyCostsOpEx;
    private $equipRentalBudgetOpEx;
    private $maintenanceFeesOpEx;
    private $clickedOn;
    private $institutionalStatus;
    private $governmentOwnedStatus;
    private $status;

    public function __construct(array $properties){

        $this->id = $properties['id'] ?? null;
        $this->userId = $properties['user_id'] ?? null;
        $this->propertyCategory = $properties['property_category'] ?? null;
        $this->propertyType = $properties['property_type'] ?? null;
        $this->propertyName = $properties['property_name'] ?? null;
        $this->street = $properties['street'] ?? null;
        $this->subDivisionBorough = $properties['sub_division_borough'] ?? null;
        $this->city = $properties['city'] ?? null;
        $this->region = $properties['region'] ?? null;
        $this->provinceState = $properties['province_state'] ?? null;
        $this->country = $properties['country'] ?? null;
        $this->zipCode = $properties['zip_code'] ?? null;
        $this->secondaryAddresses = $properties['secondary_addresses'] ?? null;
        $this->managerId = $properties['manager_id'] ?? null;
        $this->landBreadth = $properties['land_breadth'] ?? null;
        $this->landLength = $properties['land_length'] ?? null;
        $this->landSquareFootage = $properties['land_square_footage'] ?? null;
        $this->numberOfFloors = $properties['number_of_floors'] ?? null;
        $this->numberOfUnits = $properties['number_of_units'] ?? null;
        $this->propertyImage = $properties['property_image'] ?? null;
        $this->image1 = $properties['image1'] ?? null;
        $this->image2 = $properties['image2'] ?? null;
        $this->image3 = $properties['image3'] ?? null;
        $this->image4 = $properties['image4'] ?? null;
        $this->image5 = $properties['image5'] ?? null;
        $this->length = $properties['length'] ?? null;
        $this->breadth = $properties['breadth'] ?? null;
        $this->height = $properties['height'] ?? null;
        $this->depth = $properties['depth'] ?? null;
        $this->buildingSquareFootage = $properties['building_square_footage'] ?? null;
        $this->currentPropertyValue = $properties['current_property_value'] ?? null;
        $this->askingPrice = $properties['asking_price'] ?? null;
        $this->landValuation = $properties['land_valuation'] ?? null;
        $this->dateOfConstruction = $properties['date_of_construction'] ?? null;
        $this->foundationMaterial = $properties['foundation_material'] ?? null;
        $this->framingMaterial = $properties['framing_material'] ?? null;
        $this->roofingMaterial = $properties['roofing_material'] ?? null;
        $this->exteriorMaterial = $properties['exterior_material'] ?? null;
        $this->flooringMaterial = $properties['flooring_material'] ?? null;
        $this->typeOfHeating = $properties['type_of_heating'] ?? null;
        $this->lastRenovationDate = $properties['last_renovation_date'] ?? null;
        $this->propertyCertification = $properties['property_certification'] ?? null;
        $this->commonAreas = $properties['common_areas'] ?? null;
        $this->facilities = $properties['facilities'] ?? null;
        $this->amenities = $properties['amenities'] ?? null;
        $this->accessibility = $properties['accessibility'] ?? null;
        $this->securitySystem = $properties['security_system'] ?? null;
        $this->accessControlSystem = $properties['access_control_system'] ?? null;
        $this->reservedParkingSpots = $properties['reserved_parking_spots'] ?? null;
        $this->visitorParkingSpots = $properties['visitor_parking_spots'] ?? null;
        $this->parkingHourlyRate = $properties['parking_hourly_rate'] ?? null;
        $this->parkingMonthlyRate = $properties['parking_monthly_rate'] ?? null;
        $this->visitorPermittedStatus = $properties['visitor_permitted_status'] ?? null;
        $this->renovationApprovalStatus = $properties['renovation_approval_status'] ?? null;
        $this->useOfMemberCards = $properties['use_of_member_cards'] ?? null;
        $this->memberCardFee = $properties['member_card_fee'] ?? null;
        $this->animalPermittedStatus = $properties['animal_permitted_status'] ?? null;
        $this->feePerAnimal = $properties['fee_per_animal'] ?? null;
        $this->featureSelectionList = $properties['feature_selection_list'] ?? null;
        $this->buildingCertification = $properties['building_certification'] ?? null;
        $this->typeOfRent = $properties['type_of_rent'] ?? null;
        $this->rent = $properties['rent'] ?? null;
        $this->ratePerSquareFoot = $properties['rate_per_square_foot'] ?? null;
        $this->leaseDate = $properties['lease_date'] ?? null;
        $this->renewalFrequency = $properties['renewal_frequency'] ?? null;
        $this->demolitionBudgetCapEx = $properties['demolition_budget_cap_ex'] ?? null;
        $this->extensionBudgetCapEx = $properties['extension_budget_cap_ex'] ?? null;
        $this->reconstructBudgetCapEx = $properties['reconstruct_budget_cap_ex'] ?? null;
        $this->maintenanceBudgetCapEx = $properties['maintenance_budget_cap_ex'] ?? null;
        $this->equipReplaceCapEx = $properties['equip_replace_cap_ex'] ?? null;
        $this->adminFeesOpEx = $properties['admin_fees_op_ex'] ?? null;
        $this->schoolTaxOpEx = $properties['school_tax_op_ex'] ?? null;
        $this->municipalTaxOpEx = $properties['municipal_tax_op_ex'] ?? null;
        $this->waterTaxOpEx = $properties['water_tax_op_ex'] ?? null;
        $this->energyCostsOpEx = $properties['energy_costs_op_ex'] ?? null;
        $this->equipRentalBudgetOpEx = $properties['equip_rental_budget_op_ex'] ?? null;
        $this->maintenanceFeesOpEx = $properties['maintenance_fees_op_ex'] ?? null;
        $this->clickedOn = $properties['clicked_on'] ?? 0;
        $this->institutionalStatus = $properties['institutional_status'] ?? null;
        $this->governmentOwnedStatus = $properties['government_owned_status'] ?? null;
        $this->status = $properties['status'] ?? 4;

    }
    # Getter's & Setter's for all properties...


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getUserID()
    {
        return $this->userID;
    }

    public function setUserID($userID)
    {
        $this->userID = $userID;
        return $this;
    }
    public function getPropertyCategory()
    {
        return $this->propertyCategory;
    }
    public function setPropertyCategory($propertyCategory)
    {
        $this->propertyCategory = $propertyCategory;
        return $this;
    }

    public function getPropertyType()
    {
        return $this->propertyType;
    }

    public function setPropertyType($propertyType)
    {
        $this->propertyType = $propertyType;
        return $this;
    }

    public function getPropertyName()
    {
        return $this->propertyName;
    }

    public function setPropertyName($propertyName)
    {
        $this->propertyName = $propertyName;
        return $this;
    }
    public function getStreet()
    {
        return $this->street;
    }
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    public function getSubDivisionBorough()
    {
        return $this->subDivisionBorough;
    }

    public function setSubDivisionBorough($subDivisionBorough)
    {
        $this->subDivisionBorough = $subDivisionBorough;
        return $this;
    }

    public function getCity()
    {
        return $this->city;
    }
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    public function getRegion()
    {
        return $this->region;
    }

    public function setRegion($region)
    {
        $this->region = $region;
        return $this;
    }

    public function getProvinceState()
    {
        return $this->provinceState;
    }
    public function setProvinceState($provinceState)
    {
        $this->provinceState = $provinceState;
        return $this;
    }
    public function getCountry()
    {
        return $this->country;
    }
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }
    
    public function getZipCode()
    {
        return $this->zipCode;
    }
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    public function getSecondaryAddresses()
    {
        return $this->secondaryAddresses;
    }

    public function setSecondaryAddresses($secondaryAddresses)
    {
        $this->secondaryAddresses = $secondaryAddresses;
        return $this;
    }


#////////////////////////////////////////////////////////////////


    public function getManagerID()
    {
        return $this->managerID;
    }

    public function setManagerID($managerID)
    {
        $this->managerID = $managerID;
        return $this;
    }

 public function getLandBreadth()
    {
        return $this->landBreadth;
    }

    public function setLandBreadth($landBreadth)
    {
        $this->landBreadth = $landBreadth;
        return $this;
    }

    public function getLandLength()
    {
        return $this->landLength;
    }

    public function setLandLength($landLength)
    {
        $this->landLength = $landLength;
        return $this;
    }

    public function getLandSquareFootage()
    {
        return $this->landSquareFootage;
    }

    public function setLandSquareFootage($landSquareFootage)
    {
        $this->landSquareFootage = $landSquareFootage;
        return $this;
    }    


#////////////////////////////////////////////////////////////////


    public function getNumberOfFloors()
    {
        return $this->numberOfFloors;
    }

    public function setNumberOfFloors($numberOfFloors)
    {
        $this->numberOfFloors = $numberOfFloors;
        return $this;
    }

    public function getNumberOfUnits()
    {
        return $this->numberOfUnits;
    }

    public function setNumberOfUnits($numberOfUnits)
    {
        $this->numberOfUnits = $numberOfUnits;
        return $this;
    }

    public function getPropertyImage()
    {
        return $this->propertyImage;
    }

    public function setPropertyImage($propertyImage)
    {
        $this->propertyImage = $propertyImage;
        return $this;
    }

    public function getImage1()
    {
        return $this->image1;
    }

    public function setImage1($image1)
    {
        $this->image1 = $image1;
        return $this;
    }

    public function getImage2()
    {
        return $this->image2;
    }

    public function setImage2($image2)
    {
        $this->image2 = $image2;
        return $this;
    }

    public function getImage3()
    {
        return $this->image3;
    }

    public function setImage3($image3)
    {
        $this->image3 = $image3;
        return $this;
    }

    public function getImage4()
    {
        return $this->image4;
    }

    public function setImage4($image4)
    {
        $this->image4 = $image4;
        return $this;
    }

    public function getImage5()
    {
        return $this->image5;
    }

    public function setImage5($image5)
    {
        $this->image5 = $image5;
        return $this;
    }

    public function getLength()
    {
        return $this->length;
    }

    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }

    public function getBreadth()
    {
        return $this->breadth;
    }

    public function setBreadth($breadth)
    {
        $this->breadth = $breadth;
        return $this;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    public function getDepth()
    {
        return $this->depth;
    }

    public function setDepth($depth)
    {
        $this->depth = $depth;
        return $this;
    }

    public function getBuildingSquareFootage()
    {
        return $this->buildingSquareFootage;
    }

    public function setBuildingSquareFootage($buildingSquareFootage)
    {
        $this->buildingSquareFootage = $buildingSquareFootage;
        return $this;
    }


    #////////////////////////////////////////////////////////////////


    public function getCurrentPropertyValue()
    {
        return $this->currentPropertyValue;
    }

    public function setCurrentPropertyValue($currentPropertyValue)
    {
        $this->currentPropertyValue = $currentPropertyValue;
        return $this;
    }


    public function getAskingPrice()
    {
        return $this->askingPrice;
    }

    public function setAskingPrice($askingPrice)
    {
        $this->askingPrice = $askingPrice;
        return $this;
    }


    public function getLandValuation()
    {
        return $this->landValuation;
    }

    public function setlandValuation($landValuation)
    {
        $this->landValuation = $landValuation;
        return $this;
    }


    public function getDateOfConstruction()
    {
        return $this->dateOfConstruction;
    }

    public function setDateOfConstruction($dateOfConstruction)
    {
        $this->dateOfConstruction = $dateOfConstruction;
        return $this;
    }

    public function getFoundationMaterial()
    {
        return $this->foundationMaterial;
    }

    public function setFoundationMaterial($foundationMaterial)
    {
        $this->foundationMaterial = $foundationMaterial;
        return $this;
    }

    public function getFramingMaterial()
    {
        return $this->framingMaterial;
    }

    public function setFramingMaterial($framingMaterial)
    {
        $this->framingMaterial = $framingMaterial;
        return $this;
    }

    public function getRoofingMaterial()
    {
        return $this->roofingMaterial;
    }

    public function setRoofingMaterial($roofingMaterial)
    {
        $this->roofingMaterial = $roofingMaterial;
        return $this;
    }

    public function getExteriorMaterial()
    {
        return $this->exteriorMaterial;
    }

    public function setExteriorMaterial($exteriorMaterial)
    {
        $this->exteriorMaterial = $exteriorMaterial;
        return $this;
    }


    public function getFlooringMaterial()
    {
        return $this->flooringMaterial;
    }

    public function setFlooringMaterial($flooringMaterial)
    {
        $this->flooringMaterial = $flooringMaterial;
        return $this;
    }


    public function getTypeOfHeating()
    {
        return $this->typeOfHeating;
    }

    public function setTypeOfHeating($typeOfHeating)
    {
        $this->typeOfHeating = $typeOfHeating;
        return $this;
    }


    public function getLastRenovationDate()
    {
        return $this->lastRenovationDate;
    }

    public function setLastRenovationDate($lastRenovationDate)
    {
        $this->lastRenovationDate = $lastRenovationDate;
        return $this;
    }

    public function getPropertyCertification()
    {
        return $this->propertyCertification;
    }

    public function setPropertyCertification($propertyCertification)
    {
        $this->propertyCertification = $propertyCertification;
        return $this;
    }

    public function getCommonAreas()
    {
        return $this->commonAreas;
    }

    public function setCommonAreas($commonAreas)
    {
        $this->commonAreas = $commonAreas;
        return $this;
    }

    public function getFacilities()
    {
        return $this->facilities;
    }

    public function setFacilities($facilities)
    {
        $this->facilities = $facilities;
        return $this;
    }

    public function getAmenities()
    {
        return $this->amenities;
    }

    public function setAmenities($amenities)
    {
        $this->amenities = $amenities;
        return $this;
    }

    public function getAccessibility()
    {
        return $this->accessibility;
    }

    public function setAccessibility($accessibility)
    {
        $this->accessibility = $accessibility;
        return $this;
    }

    public function getSecuritySystem()
    {
        return $this->securitySystem;
    }

    public function setSecuritySystem($securitySystem)
    {
        $this->securitySystem = $securitySystem;
        return $this;
    }

    public function getAccessControlSystem()
    {
        return $this->accessControlSystem;
    }

    public function setAccessControlSystem($accessControlSystem)
    {
        $this->accessControlSystem = $accessControlSystem;
        return $this;
    }


    #////////////////////////////////////////////////////////////////

    public function getReservedParkingSpots()
    {
        return $this->reservedParkingSpots;
    }

    public function setReservedParkingSpots($reservedParkingSpots)
    {
        $this->reservedParkingSpots = $reservedParkingSpots;
        return $this;
    }

    public function getVisitorParkingSpots()
    {
        return $this->visitorParkingSpots;
    }

    public function setVisitorParkingSpots($visitorParkingSpots)
    {
        $this->visitorParkingSpots = $visitorParkingSpots;
        return $this;
    }

    public function getParkingHourlyRate()
    {
        return $this->parkingHourlyRate;
    }

    public function setParkingHourlyRate($parkingHourlyRate)
    {
        $this->parkingHourlyRate = $parkingHourlyRate;
        return $this;
    }

    public function getParkingMonthlyRate()
    {
        return $this->parkingMonthlyRate;
    }

    public function setParkingMonthlyRate($parkingMonthlyRate)
    {
        $this->parkingMonthlyRate = $parkingMonthlyRate;
        return $this;
    }


    #////////////////////////////////////////////////////////////////


    public function getVisitorPermittedStatus()
    {
        return $this->visitorPermittedStatus;
    }

    public function setVisitorPermittedStatus($visitorPermittedStatus)
    {
        $this->visitorPermittedStatus = $visitorPermittedStatus;
        return $this;
    }

    public function getRenovationApprovalStatus()
    {
        return $this->renovationApprovalStatus;
    }

    public function setRenovationApprovalStatus($renovationApprovalStatus)
    {
        $this->renovationApprovalStatus = $renovationApprovalStatus;
        return $this;
    }

    public function getUseOfMemberCards()
    {
        return $this->useOfMemberCards;
    }

    public function setUseOfMemberCards($useOfMemberCards)
    {
        $this->useOfMemberCards = $useOfMemberCards;
        return $this;
    }

    public function getMemberCardFee()
    {
        return $this->memberCardFee;
    }

    public function setMemberCardFee($memberCardFee)
    {
        $this->memberCardFee = $memberCardFee;
        return $this;
    }

    public function getAnimalPermittedStatus()
    {
        return $this->animalPermittedStatus;
    }

    public function setAnimalPermittedStatus($animalPermittedStatus)
    {
        $this->animalPermittedStatus = $animalPermittedStatus;
        return $this;
    }

    public function getFeePerAnimal()
    {
        return $this->feePerAnimal;
    }

    public function setFeePerAnimal($feePerAnimal)
    {
        $this->feePerAnimal = $feePerAnimal;
        return $this;
    }


    #////////////////////////////////////////////////////////////////


    public function getFeatureSelectionList()
    {
        return $this->featureSelectionList;
    }

    public function setFeatureSelectionList($featureSelectionList)
    {
        $this->featureSelectionList = $featureSelectionList;
        return $this;
    }


    // Getter and Setter for $building_certification
    public function getBuildingCertification()
    {
        return $this->buildingCertification;
    }

    public function setBuildingCertification($buildingCertification)
    {
        $this->buildingCertification = $buildingCertification;
        return $this;
    }

    // Getter and Setter for $type_of_rent
    public function getTypeOfRent()
    {
        return $this->typeOfRent;
    }

    public function setTypeOfRent($typeOfRent)
    {
        $this->typeOfRent = $typeOfRent;
        return $this;
    }

    // Getter and Setter for $rent
    public function getRent()
    {
        return $this->rent;
    }

    public function setRent($rent)
    {
        $this->rent = $rent;
        return $this;
    }

    // Getter and Setter for $rate_per_square_feet
    public function getRatePerSquareFoot()
    {
        return $this->ratePerSquareFoot;
    }

    public function setRatePerSquareFoot($ratePerSquareFoot)
    {
        $this->ratePerSquareFoot = $ratePerSquareFoot;
        return $this;
    }


    public function getLeaseDate()
    {
        return $this->leaseDate;
    }

    public function setLeaseDate($leaseDate)
    {
        $this->leaseDate = $leaseDate;
        return $this;
    }


    public function getRenewalFrequency()
    {
        return $this->renewalFrequency;
    }

    public function setRenewalFrequency($renewalFrequency)
    {
        $this->renewalFrequency = $renewalFrequency;
        return $this;
    }


#////////////////////////////////////////////////////////////////


public function getDemolitionBudgetCapEx()
{
    return $this->demolitionBudgetCapEx;
}

public function setDemolitionBudgetCapEx($demolitionBudgetCapEx)
{
    $this->demolitionBudgetCapEx = $demolitionBudgetCapEx;
    return $this;
}

public function getExtensionBudgetCapEx()
{
    return $this->extensionBudgetCapEx;
}

public function setExtensionBudgetCapEx($extensionBudgetCapEx)
{
    $this->extensionBudgetCapEx = $extensionBudgetCapEx;
    return $this;
}

public function getReconstructBudgetCapEx()
{
    return $this->reconstructBudgetCapEx;
}

public function setReconstructBudgetCapEx($reconstructBudgetCapEx)
{
    $this->reconstructBudgetCapEx = $reconstructBudgetCapEx;
    return $this;
}

public function getMaintenanceBudgetCapEx()
{
    return $this->maintenanceBudgetCapEx;
}

public function setMaintenanceBudgetCapEx($maintenanceBudgetCapEx)
{
    $this->maintenanceBudgetCapEx = $maintenanceBudgetCapEx;
    return $this;
}

public function getEquipReplaceBudgetCapEx()
{
    return $this->equipReplaceBudgetCapEx;
}

public function setEquipReplaceBudgetCapEx($equipReplaceBudgetCapEx)
{
    $this->equipReplaceBudgetCapEx = $equipReplaceBudgetCapEx;
    return $this;
}


#////////////////////////////////////////////////////////////////


public function getAdminFeesOpEx()
{
    return $this->adminFeesOpEx;
}

public function setAdminFeesOpEx($adminFeesOpEx)
{
    $this->adminFeesOpEx = $adminFeesOpEx;
    return $this;
}

public function getSchoolTaxOpEx()
{
    return $this->schoolTaxOpEx;
}

public function setSchoolTaxOpEx($schoolTaxOpEx)
{
    $this->schoolTaxOpEx = $schoolTaxOpEx;
    return $this;
}

public function getMunicipalTaxOpEx()
{
    return $this->municipalTaxOpEx;
}

public function setMunicipalTaxOpEx($municipalTaxOpEx)
{
    $this->municipalTaxOpEx = $municipalTaxOpEx;
    return $this;
}

public function getWaterTaxOpEx()
{
    return $this->waterTaxOpEx;
}

public function setWaterTaxOpEx($waterTaxOpEx)
{
    $this->waterTaxOpEx = $waterTaxOpEx;
    return $this;
}

public function getEnergyCostsOpEx()
{
    return $this->energyCostsOpEx;
}

public function setEnergyCostsOpEx($energyCostsOpEx)
{
    $this->energyCostsOpEx = $energyCostsOpEx;
    return $this;
}

public function getEquipRentalBudgetOpEx()
{
    return $this->equipRentalBudgetOpEx;
}

public function setEquipRentalBudgetOpEx($equipRentalBudgetOpEx)
{
    $this->equipRentalBudgetOpEx = $equipRentalBudgetOpEx;
    return $this;
}

public function getMaintenanceFeesOpEx()
{
    return $this->maintenanceFeesOpEx;
}

public function setMaintenanceFeesOpEx($maintenanceFeesOpEx)
{
    $this->maintenanceFeesOpEx = $maintenanceFeesOpEx;
    return $this;
}


#////////////////////////////////////////////////////////////////

public function getClickedOn()
    {
        return $this->clickedOn;
    }

    public function setClickedOn($clickedOn)
    {
        $this->clickedOn = $clickedOn;
        return $this;
    }


#////////////////////////////////////////////////////////////////


    public function getGovernmentOwnedStatus()
    {
        return $this->governmentOwnedStatus;
    }

    public function setGovernmentOwnedStatus($governmentOwnedStatus)
    {
        $this->governmentOwnedStatus = $governmentOwnedStatus;
        return $this;
    }

    public function getInstitutionalStatus()
    {
        return $this->institutionalStatus;
    }

    public function setInstitutionalStatus($institutionalStatus)
    {
        $this->institutionalStatus = $institutionalStatus;
        return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }
}

?>
   
